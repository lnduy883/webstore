<?php 
    include "../../config/connect.php";
    $data = new database();
    if(isset($_POST["themsp"])){
        $tensp = $_POST["tensp"];
        $gia = $_POST["giasp"];

        $hinhanh = $_FILES["hinhanhsp"]["name"];
        $url_hinhanh = $_FILES["hinhanhsp"]["tmp_name"];
        $hinhanh = time()."_".$hinhanh;
        move_uploaded_file($url_hinhanh,"../../../images/" . $hinhanh);

        $soluong = $_POST["soluongsp"];
        $tinhtrang = $_POST["tinhtrangsp"];
        $id_danhmuc = $_POST["id_danhmuc"];
        $data->command("INSERT INTO sanpham1(id_sanpham,tensanpham,gia,hinhanh,soluong,tinhtrang,id_danhmuc) 
        VALUES(null,'$tensp','$gia','$hinhanh','$soluong','$tinhtrang','$id_danhmuc')");
        header("location:../../index.php?action=quanlysanpham");
    }

    if(isset($_GET["id"])){
        $id_sp = $_GET["id"];
        $data->command("DELETE FROM sanpham WHERE id_sanpham = '$id_sp'");
        header("location:../../index.php?action=quanlysanpham");
    }

    if(isset($_POST["suasp"])){
        $idsp = $_POST["idsp"];
        $tensp = $_POST["tensp"];
        $giasp = $_POST["giasp"];
        $soluongsp = $_POST["soluongsp"];
        $tinhtrang = $_POST["tinhtrangsp"];
        if($_FILES["hinhanhsp"]["size"] > 0){
            $hinhanhsp = $_FILES["hinhanhsp"]["name"];
            $hinhanhsp = time()."_".$hinhanhsp;
            $id_danhmuc = $_POST["id_danhmuc"];
            $data->command("UPDATE sanpham1 SET tensanpham='$tensp',gia='$giasp',hinhanh='$hinhanhsp',soluong='$soluongsp',tinhtrang='$tinhtrangsp',id_danhmuc='$id_danhmuc'
            WHERE id_sanpham='$idsp'"); 
            header("location:../../index.php?action=quanlysanpham");
        }else{
            $hinhanhtruoc = $_POST["hinhanhtruoc"];
            $id_danhmuc = $_POST["id_danhmuc"];
            $data->command("UPDATE sanpham1 SET tensanpham='$tensp',gia='$giasp',hinhanh='$hinhanhsp',soluong='$soluongsp',tinhtrang='$tinhtrangsp',id_danhmuc='$id_danhmuc'
            WHERE id_sanpham='$idsp'"); 
            header("location:../../index.php?action=quanlysanpham");  
        }
        
    }
?>

