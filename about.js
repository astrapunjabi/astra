
  const image = document.getElementById("aboutImage");
  const nextBtn = document.getElementById("nextBtn");
  const prevBtn = document.getElementById("prevBtn");
  const dotsContainer = document.getElementById("dots");

  const images = ["pool.jpg", "pool2.jpg", "pool3.jpg"];
  let index = 0;
  let autoplay;

  function updateImage() {
    image.style.opacity = 0;
    setTimeout(() => {
      image.src = images[index];
      image.style.opacity = 1;
      updateDots();
    }, 300);
  }

  function updateDots() {
    const dots = document.querySelectorAll(".dots span");
    dots.forEach(dot => dot.classList.remove("active"));
    dots[index].classList.add("active");
  }

  function createDots() {
    images.forEach((_, i) => {
      const dot = document.createElement("span");
      dot.addEventListener("click", () => {
        index = i;
        updateImage();
        resetAutoplay();
      });
      dotsContainer.appendChild(dot);
    });
    updateDots();
  }

  function resetAutoplay() {
    clearInterval(autoplay);
    autoplay = setInterval(() => {
      index = (index + 1) % images.length;
      updateImage();
    }, 4000);
  }

  nextBtn.addEventListener("click", () => {
    index = (index + 1) % images.length;
    updateImage();
    resetAutoplay();
  });

  prevBtn.addEventListener("click", () => {
    index = (index - 1 + images.length) % images.length;
    updateImage();
    resetAutoplay();
  });

  createDots();
  resetAutoplay();

