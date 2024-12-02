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
        <a href="index.php" class="nav-link">Features</a>
        <a href="index.php" class="nav-link">About</a>
        <a href="index.php" class="nav-link">Contact</a>
        <a href="login.php" class="login-btn">Login</a>
      </div>
    </nav>
  </header>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./css/login.css" />
  </head>
  <body>
    <!-- Sign Up Form Section -->
    <div class="login-container">
      <div class="login-card">
        <h2>Welcome Back</h2>
        <p>Please log in with your credentials.</p>

        <form action="#" method="POST">
          <!-- Email Input -->
          <div class="input-group">
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Enter your email"
              required
            />
          </div>

          <!-- Password Input -->
          <div class="input-group">
            <label for="password">Password</label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Enter your password"
              required
            />
          </div>

          <!-- Forgot Password Link -->
          <div class="forgot-password">
            <a href="#">Forgot password?</a>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="login-btn">Login</button>
        </form>

        <!-- Bottom Link to Sign Up -->
        <div class="signup-link">
          Don't have an account? <a href="signup.php">Sign Up</a>
        </div>
      </div>
    </div>
  </body>
</html>
