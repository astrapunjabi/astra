<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>HOME PAGE</title>
  <link rel="stylesheet" href="style.css" />
   <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
  <div class="slideshow"></div>
  <div class="overlay"></div>
 <nav>
  <div class="Logo">
    <span class="brand">RR</span> Pool Resort
  </div>
  <div class="menu-toggle" id="menuToggle">
    <i class="fas fa-bars"></i>
  </div>

  <ul class="nav-links" id="navLinks">
    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
    <li><a href="#about"><i class="fas fa-users"></i> About Us</a></li>
    <li><a href="#contact"><i class="fas fa-envelope"></i> Contact</a></li>
    <li><a href="#" id="openAuth"><i class="fas fa-sign-in-alt"></i> Login</a></li>
  </ul>
</nav>
  <div class="content">
    <h2><span>EXPLORE</span>THE<span>BEAUTY OF</span>THE PASS</h2>
    <a href="index.php" class="btn">Explore Now</a>
  </div>
  <div class="info-box">
  <section class="about-us fade-in delay-1" id="about">
  <div class="about-container">
    <div class="about-text">
      <h2>About <span>Us</span></h2>
      <p>
        Welcome to <strong>RR Pool Resort</strong> – your perfect getaway for rest, relaxation, and fun.
        Nestled in a serene environment, we offer clean and luxurious pools, friendly staff,
        and unforgettable experiences. Whether it's a weekend retreat or a family celebration,
        we make it memorable.
      </p>
      <p>
        Book your stay today and dive into comfort and excitement like never before!
      </p>
    </div>

    <div class="about-img-wrapper">
      <button id="prevBtn" class="arrow-btn"><i class="fas fa-chevron-left"></i></button>
      <img id="aboutImage" src="pool.jpg" alt="RR Pool Resort Image">
      <button id="nextBtn" class="arrow-btn"><i class="fas fa-chevron-right"></i></button>
      <div class="dots" id="dots"></div>
    </div>
  </div>
</section>
<div class="section-divider"></div>
<section class="contact fade-in delay-2" id="contact">
  <div class="contact-container">
    <div class="contact-info">
      <h2>Contact <span>Us</span></h2>
      <p>We'd love to hear from you! For bookings, questions, or feedback, feel free to reach out.</p>
      <ul>
        <li><i class="fas fa-map-marker-alt"></i> Brgy. Example, City, Philippines</li>
        <li><i class="fas fa-phone"></i> +63 912 345 6789</li>
        <li><i class="fas fa-envelope"></i> rrpoolresort@example.com</li>
      </ul>
    </div>
    <form class="contact-form" action="#" method="POST">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>
  </div>
</section>
<div class="auth-modal" id="authModal">
  <div class="auth-box">
    <span class="close-auth" id="closeAuth">&times;</span>
    <form id="loginForm" class="auth-form active">
      <h2><span>L</span>O<span>G</span>IN</h2>
      <input class="i" type="text" placeholder="Username" required autofocus>
      <input class="i" type="password" placeholder="Password" required>
      <button class="b" type="submit">Login</button>
      <p class="switch-message">Don't have an account? <a href="#" id="showSignup">Sign up</a></p>
    </form>
    <form action="connection.php" id="signupForm" class="auth-form" method="POST">
      <h2>Sign Up</h2>
      <input type="text" name="username" placeholder="Username" required autofocus>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
     <input type="password" name="confirm_password" placeholder="Confirm Password" required>
     <small id="passwordError" style="color: red; display: none;"></small>
      <button type="submit">Register</button>
      <p class="switch-message">Already have an account? <a href="#" id="showLogin">Log in</a></p>
    </form>
  </div>
</div>
<script src="auth.js"></script>
<script src="about.js"></script>
<?php
if (isset($_GET['showModal']) && $_GET['showModal'] === 'login') {
    echo '<script>
      document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("authModal").classList.add("show");
        document.getElementById("loginForm").classList.add("active");
        document.getElementById("signupForm").classList.remove("active");
      });
    </script>';
}
?>
<script>
  const menuToggle = document.getElementById('menuToggle');
  const navLinks = document.getElementById('navLinks');

  menuToggle.addEventListener('click', () => {
    navLinks.classList.toggle('active');
  });

</script>
</body>
</html>
