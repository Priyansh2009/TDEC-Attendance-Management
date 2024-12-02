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
  <title>Sign Up</title>
  <!-- Custom Styles -->
  <link rel="stylesheet" href="./css/signup.css" />
</head>

<body>
  <!-- Sign Up Form Section -->
  <div class="signup-container">
    <div class="signup-card">
      <h2>Create an Account</h2>
      <p>Please fill in the details to create a new account.</p>

      <form action="#" method="POST">
        <!-- Full Name Input -->
        <div class="input-group">
          <label for="fullname">Full Name</label>
          <input
            type="text"
            id="fullname"
            name="fullname"
            placeholder="Enter your full name"
            required />
        </div>

        <!-- Email Input -->
        <div class="input-group">
          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            required />
        </div>

        <!-- Password Input -->
        <div class="input-group">
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            required />
        </div>

        <!-- Confirm Password Input -->
        <div class="input-group">
          <label for="confirmPassword">Confirm Password</label>
          <input
            type="password"
            id="confirmPassword"
            name="confirmPassword"
            placeholder="Confirm your password"
            required />
        </div>

        <!-- Terms and Conditions Checkbox -->
        <div class="checkbox-group">
          <input type="checkbox" id="terms" required />
          <label for="terms">
            I agree to the <a href="#">Terms and Conditions</a>
          </label>
        </div>

        <!-- Submit Button -->
        <a href="index.php"><button type="submit" class="signup-btn">Sign Up</button></a>
      </form>

      <!-- Bottom Link to Login -->
      <div class="login-link">
        Already have an account? <a href="login.php">Login</a>
      </div>
    </div>
  </div>
</body>

</html>