const openBtn = document.getElementById("openAuth");
const closeBtn = document.getElementById("closeAuth");
const authModal = document.getElementById("authModal");
const loginForm = document.getElementById("loginForm");
const signupForm = document.getElementById("signupForm");
const showSignup = document.getElementById("showSignup");
const showLogin = document.getElementById("showLogin");
const passwordError = document.getElementById("passwordError");

// Modal Open/Close
openBtn.onclick = () => {
  authModal.classList.add("show");
  loginForm.classList.add("active");
  signupForm.classList.remove("active");
};

closeBtn.onclick = () => {
  authModal.classList.remove("show");
};

// Switch Forms
showSignup.onclick = (e) => {
  e.preventDefault();
  signupForm.classList.add("active");
  loginForm.classList.remove("active");
};

showLogin.onclick = (e) => {
  e.preventDefault();
  loginForm.classList.add("active");
  signupForm.classList.remove("active");
};

// ✅ Password match check before submit
signupForm.addEventListener("submit", function (e) {
  const password = signupForm.querySelector('input[name="password"]').value;
  const confirmPassword = signupForm.querySelector('input[name="confirm_password"]').value;

  if (password !== confirmPassword) {
    e.preventDefault();
    if (passwordError) {
      passwordError.textContent = "❌ Passwords do not match.";
      passwordError.style.display = "block";
    } else {
      alert("❌ Passwords do not match.");
    }
  } else {
    if (passwordError) passwordError.style.display = "none";
  }
});
