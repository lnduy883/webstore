<?php 
    include "admincp/config/connect.php";
    $data = new database();
    session_start();
    if(isset($_POST["dangnhaptv"])){
        $taikhoantv = $_POST["taikhoantv"];
        $matkhautv = md5($_POST["matkhautv"]);
        $data->select("SELECT * FROM thanhvien WHERE taikhoan_tv = '$taikhoantv' AND matkhau_tv ='$matkhautv'");
        $i = 0;
        while($data->fetch()){
            $i++;
        }
        if($i > 0){
            $_SESSION["thanhvien"] = $taikhoantv;
            header("location:index.php");
        }else{
            echo '<p style="color:red;text-align:center;">*Sai tài khoản hoặc mật khẩu. Vui lòng nhập lại</p>';
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Đăng nhập thành viên</title>
</head>
<body>
    <h2 class="login-title">Đăng nhập</h2>
<form action="dangnhaptv.php" method="post" class="login-form">
    <table class="login-table">
        <tr>
            <td><label for="taikhoan">Tài khoản:</label></td>
            <td><input type="text" name="taikhoantv" required></td>
        </tr>
        <tr>
            <td><label for="matkhau">Mật khẩu:</label></td>
            <td><input type="password" name="matkhautv" required></td>
        </tr>
        <tr>
            <td colspan="2" class="login-buttons">
                <button type="submit" name="dangnhaptv">Đăng nhập</button>
            </td>
        </tr>
        <tr>
            <th colspan="2">Bạn chưa có tài khoản? <a href="index.php?quanly=dangkytv">Đăng ký ngay</a></th>
        </tr>
    </table>
</form>
</body>
</html>