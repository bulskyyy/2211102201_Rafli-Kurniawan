<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <style>
    body {
      font-family: Arial;
      background-color:rgb(143, 221, 119);
      text-align: center;
      padding-top: 100px;
    }
    .box {
      background: white;
      padding: 30px;
      display: inline-block;
      border-radius: 10px;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
    }
    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      background-color: #f44336;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
    }
    a:hover {
      background-color: #d32f2f;
    }
  </style>
</head>
<body>
  <div class="box">
    <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Ini adalah halaman dashboard Anda.</p>
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>