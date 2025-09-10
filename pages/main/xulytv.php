<?php 
    include "../../admincp/config/connect.php";
    session_start();
    $data = new database();
    if(isset($_SESSION["thanhvien"]) && $_GET["dangxuat"]==1){
        unset($_SESSION["thanhvien"]);
        header("location:../../index.php");
    }else{
        header("location:../../index.php");

    }

    if(isset($_POST["dk-tv"])){
        $taikhoan_tv = $_POST["taikhoan_tv"];
        $matkhau_tv = md5($_POST["matkhau_tv"]);
        $email_tv = $_POST["email_tv"];
        $sdt_tv = $_POST["sdt_tv"];
        $data->select("SELECT * FROM thanhvien WHERE taikhoan_tv = '$taikhoan_tv'");
        $i=0;
        while($data->fetch()){
            $i++;
        }
        if($i == 0){
        $data->command("INSERT INTO thanhvien(id_tv,taikhoan_tv,matkhau_tv,email_tv,sdt_tv) 
        VALUES(null,'$taikhoan_tv','$matkhau_tv','$email_tv','$sdt_tv')");
        header("location:../../dangnhaptv.php");
        }else{
            header("location:../../index.php?quanly=taikhoantontai");

        }
        
    }

    if(isset($_POST["capnhat_tv"])){
        $taikhoan_tv = $_SESSION["thanhvien"];
        $matkhau_tv = md5($_POST["matkhau_tv"]);
        $data->select("SELECT * FROM thanhvien WHERE taikhoan_tv ='$taikhoan_tv'");
        $r = $data->fetch();
        if($_POST["matkhaumoi_tv"] == $_POST["matkhaumoi1_tv"] && $matkhau_tv == $r["matkhau_tv"]){
            $matkhaumoi_tv = md5($_POST["matkhaumoi_tv"]);
            $data->command("UPDATE thanhvien SET matkhau_tv = '$matkhaumoi_tv' WHERE taikhoan_tv = '$taikhoan_tv'");
            unset($_SESSION["thanhvien"]);
            header("location:../../dangnhaptv.php");
        }else if($_POST["matkhaumoi_tv"] == $_POST["matkhaumoi1_tv"] && $matkhau_tv != $r["matkhau_tv"]){
            $_SESSION["msg"] = "Sai mật khẩu cũ. Vui lòng nhập lại.";
            header("location:../../index.php?quanly=doimatkhautv");
        }else{
            $_SESSION["msg"] = "Nhập lại mật khẩu không trùng khớp.";
            header("location:../../index.php?quanly=doimatkhautv");
        }
    }
?>
