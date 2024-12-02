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

<!-- Teacher Management -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Management</title>
    <link rel="stylesheet" href="./css/teachers.css">
</head>
<body>
    <div class="container">
        <div class="teacher-list">
            <h2>Teachers</h2>
            <table>
                <thead>
                    <tr>
                        <th>Teacher Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="teacherTable">
                    <!-- Teacher rows will be dynamically inserted here -->
                </tbody>
            </table>
        </div>

        <div class="add-teacher">
            <h2>Add Teachers</h2>
            <form id="teacherForm">
                <label>
                    Teacher Name:
                    <input type="text" id="name" required>
                </label>
                <label>
                    Subject Specialist (optional):
                    <input type="text" id="subject">
                </label>
                <label>
                    Email:
                    <input type="email" id="email" required>
                </label>
                <label>
                    Contact:
                    <input type="text" id="contact" required>
                </label>
                <label>
                    Salary:
                    <input type="text" id="salary">
                </label>
                <label>
                    Address:
                    <input type="text" id="address">
                </label>
                <label>
                    Password:
                    <input type="password" id="password" required>
                </label>
                <label>
                    Picture:
                    <input type="file" id="picture">
                </label>
                <button type="submit">Add Teacher</button>
            </form>
        </div>
    </div>

    <script src="teachers.js"></script>
</body>
</html>
