<?php 
    include "../../config/connect.php";
    $data = new database();
    
    if(isset($_POST["them"])){
    $tendanhmuc = $_POST['tendanhmuc'];
    $data->command("INSERT INTO danhmuc(id_danhmuc,tendanhmuc) VALUES(null,'$tendanhmuc')");
    header("location:../../index.php?action=quanlydanhmucsanpham");
    }
    
    if(isset($_GET["id"])){
        $id_danhmuc = $_GET["id"];
        $data->command("DELETE FROM danhmuc WHERE id_danhmuc='$id_danhmuc'");
        header("location:../../index.php?action=quanlydanhmucsanpham");
    }

    if(isset($_POST["sua"])){
        $iddanhmuc = $_POST["iddanhmuc"];
        $tendanhmuc = $_POST["tendanhmuc"];
        $data->command("UPDATE danhmuc SET tendanhmuc='$tendanhmuc' WHERE id_danhmuc='$iddanhmuc'");
        header("location:../../index.php?action=quanlydanhmucsanpham");
    }
    
?>