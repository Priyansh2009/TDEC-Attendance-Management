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

<!-- Class Management -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Management</title>
    <link rel="stylesheet" href="./css/class.css">
</head>
<body>
    <div class="container">
        <div class="class-list">
            <h2>Clases</h2>
            <table>
                <thead>
                    <tr>
                        <th>Class Name</th>
                        <th>Class Teacher</th>
                        <th>Student Limit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="classTable">
                    <!-- class rows will be dynamically inserted here -->
                </tbody>
            </table>
        </div>

        <div class="add-class">
            <h2>Add Class</h2>
            <form id="classForm">
                <label>
                    Class Name:
                    <input type="text" id="name" required>
                </label>
                <label>
                    Class Teacher:
                    <input type="text" id="name" required>
                </label>
                <label>
                    Student Limit:
                    <input type="text" id="name" required>
                </label>
                <button type="submit">Add class</button>
            </form>
        </div>
    </div>

    <script src="class.js"></script>
</body>
</html>