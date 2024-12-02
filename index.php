<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <!-- External CSS -->
  <link rel="stylesheet" href="./css/index.css" />
  <!-- Font Awesome for icons -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <!-- Header with Navigation -->
  <header class="header">
    <nav class="navbar">
      <a href="#" class="navbar-brand">
        <img src="./images/logo.jpeg" alt="logo" class="logo" />
        <div class="navbar-info">
          <h2 class="navbar-title">TDEC</h2>
          <p class="full-form">Tapi Diploma Engineering College</p>
        </div>
      </a>
      <button class="navbar-toggler" onclick="toggleNavbar()">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-nav" id="navbarNav">
        <a href="index.php" class="nav-link">Home</a>
        <a href="#features" class="nav-link">Features</a>
        <a href="#about" class="nav-link">About</a>
        <a href="#contact" class="nav-link">Contact</a>
        <a href="login.php" class="login-btn">Login</a>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section id="hero" class="hero">
    <div class="hero-content">
      <h1>Your Path to a Smarter Future</h1>
      <p class="hero-description">
        Join us today and start your journey with us. Empowering education
        through technology.
      </p>
      <a href="signup.php" class="cta-button">Get Started</a>
    </div>
  </section>

  <!-- Main comment -->
  <section class="main--card">
    <div class="main-cards">
      <div class="main-card">
        <a href="students.php" class="card-links">
          <i class="main-icon fa fa-graduation-cap fa-3x"></i>
          <h4>Students</h4>
          <p>
            Add Students here and check Students details.
          </p>
        </a>
      </div>

      <div class="main-card">
        <a href="teachers.php" class="card-links">
          <i class="main-icon fa fa-users fa-3x"></i>
          <h4>Teachers</h4>
          <p>
            Join a growing community of learners, teachers, and professionals.
          </p>
        </a>
      </div>

      <div class="main-card">
        <a href="class.php" class="card-links">
          <i class="main-icon fa fa-desktop fa-3x"></i>
          <h4>Class</h4>
          <p>
            Join a growing community of learners, teachers, and professionals.
          </p>
        </a>
      </div>

      <div class="main-card">
        <a href="attandance.php" class="card-links">
          <i class="main-icon fa fa-bar-chart fa-3x"></i>
          <h4>Attendance</h4>
          <p>
            Join a growing community of learners, teachers, and professionals.
          </p>
        </a>
      </div>


    </div>
  </section>


  <!-- Features Section -->
  <section id="features" class="features">
    <div class="features-content">
      <h2>Our Features</h2>
      <div class="feature-cards">
        <div class="feature-card">
          <a href="https://tapidiploma.org/wp-content/uploads/2024/05/Course_List_approved_by_SWAYAM_Board_2024_January_Semester.pdf">
            <i class="feature-icon fa fa-graduation-cap fa-2x"></i>
            <h4>E-learning</h4>
            <p>
              Access to a wide range of courses and learning resources, anytime,
              anywhere.
            </p>
          </a>
        </div>

        <div class="feature-card">
          <a href="https://tapidiploma.org/principals-desk/">
            <i class="feature-icon fa fa-address-book fa-2x"></i>
            <h4>Community</h4>
            <p>
              Join a growing community of learners, teachers, and professionals.
            </p>
          </a>
        </div>

        <div class="feature-card">
          <i class="feature-icon fa fa-chart-line fa-2x"></i>
          <h4>Facilities</h4>
          <p>
            Track your progress and achieve your educational goals with ease.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about">
    <div class="about-content">
      <h2>About Us</h2>
      <p class="about-description">
        We are dedicated to revolutionizing education through technology and
        innovation. Our platform offers the best tools to empower students and
        educators alike.
      </p>
      <a href="https://tapidiploma.org/" class="cta-button">Learn More</a>
    </div>

  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact">
    <div class="contact-content">
      <h2>Contact Us</h2>
      <p>Have any questions? Reach out to us!</p>
      <a href="mailto:info@tdec.com" class="cta-button">Email Us</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2024 TDEC. All rights reserved.</p>
  </footer>

  <script>
    // Toggle navbar visibility on small screens
    function toggleNavbar() {
      const navbarNav = document.getElementById("navbarNav");
      navbarNav.classList.toggle("active");
    }
  </script>
</body>

</html>