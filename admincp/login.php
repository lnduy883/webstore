<?php 
    session_start();
    include "config/connect.php";
    $data = new database();
    if(isset($_SESSION["admin"])){
      header("location:index.php");
    }

    if(isset($_POST["dangnhap"])){
      $taikhoan = $_POST["taikhoan"];
      $matkhau = md5($_POST["matkhau"]);
      $data->select("SELECT * FROM admin WHERE username = '$taikhoan' AND password = '$matkhau'");
      $i = 0;
      while($r = $data->fetch()){
        $i++;
      }
      if($i > 0){
        $_SESSION["admin"] = $taikhoan;
        header("location:index.php");
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/style_admin.css">
    <title>Đăng Nhập</title>
</head>
<body class="login-page">
  <div class="login-container">
    <h2 class="login-title">Đăng nhập Admin</h2>
    <form action="login.php" method="post">
      <input type="text" class="login-input" name="taikhoan" placeholder="Tên đăng nhập" required>
      <input type="password" class="login-input" name="matkhau" placeholder="Mật khẩu" required>
      <button type="submit" class="login-button" name="dangnhap">Login</button>
      <div class="login-links">
        <a href="#">Quên mật khẩu?</a> | 
        <a href="#">Đăng ký</a>
      </div>
    </form>
  </div>
</body>
</html>