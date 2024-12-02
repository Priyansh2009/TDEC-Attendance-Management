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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance Management</title>
  <link rel="stylesheet" href="./css/attendance.css"/>
</head>

<body>
  <div class="attendance-container">
    <div class="attendance-header">
      <h2>Attendance Management</h2>
    </div>
    <div class="form-group">
      <label for="class">Select Class</label>
      <select id="class">
        <option value="Class 1">Class 1</option>
        <option value="Class 2">Class 2</option>
      </select>
    </div>
    <div class="form-group">
      <label for="attendance-type">Attendance Type</label>
      <select id="attendance-type">
        <option value="Students">Students</option>
        <option value="Teachers">Teachers</option>
      </select>
    </div>
    <div class="form-group">
      <label for="attendance-date">Attendance Date</label>
      <input type="date" id="attendance-date">
    </div>
    <button onclick="loadStudents()" class="take-attendance">Take Attendance</button>

    <div class="student-list" id="student-list" style="margin-top: 20px;"></div>

    <button class="save-btn" onclick="saveAttendance()">Save Record</button>
  </div>

  <script src="attendance.js"></script>
</body>

</html>