<?php
session_start();
$user = "Isnaeni";
$pass = "12345";

if ($_POST['username'] == $user && $_POST['password'] == $pass) {
  $_SESSION['username'] = $user;
  header("Location: dashboard.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Gagal</title>
  <style>
    body {
      font-family: Arial;
      background-color:rgb(143, 221, 119);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }
    .error-box {
      background-color: white;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
      max-width: 350px;
    }
    h2 {
      color: #d32f2f;
      margin-bottom: 15px;
    }
    a {
      text-decoration: none;
      background-color:rgb(19, 161, 23);
      color: white;
      padding: 10px 20px;
      display: inline-block;
      margin-top: 15px;
      border-radius: 5px;
    }
    a:hover {
      background-color: #388e3c;
    }
  </style>
</head>
<body>
  <div class="error-box">
    <h2>Login Gagal!</h2>
    <p>Username atau password salah.</p>
    <a href="login.php">Coba Lagi</a>
  </div>
</body>
</html>