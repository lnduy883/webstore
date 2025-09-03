<?php 
    session_start();
    include "../../admincp/config/connect.php";

    if(isset($_POST["themgiohang"])){
    $id_sanpham = $_GET["id"];
    $soluong = 1;
    $data = new database();
    $data->select("SELECT * FROM sanpham1 WHERE id_sanpham='$id_sanpham'");
    $r = $data->fetch();
    if($r){
        $prd_cart = array(
            'tensanpham' => $r["tensanpham"],
            'id'         => $id_sanpham,
            'gia'        => $r["gia"],
            'soluong'    => $soluong,
            'hinhanh'    => $r["hinhanh"]
        );
        if(isset($_SESSION["cart"])){
            $found = false;
            foreach($_SESSION["cart"] as &$cart_item){
                if($cart_item["id"] == $id_sanpham){
                    $cart_item["soluong"] += 1; 
                    $found = true;
                    break;
                }
            }
            if($found == false){
                $_SESSION["cart"][] = $prd_cart;
                header("location:../../index.php?quanly=giohang");

            }
        } else {
            $_SESSION["cart"][] = $prd_cart;
            header("location:../../index.php?quanly=giohang");

        }
    }
    }


    if(isset($_SESSION["cart"]) && $_GET["xoatatca"] == 1){
        unset($_SESSION["cart"]);
        header("location:../../index.php?quanly=giohang");
    }


    if(isset($_SESSION["cart"]) && isset($_GET["xoa"])){
        $id=$_GET["xoa"];
        foreach($_SESSION["cart"] as $cart_item){
            if($cart_item["id"]!=$id){
                $prd_cart[] = array(
                'tensanpham' => $cart_item["tensanpham"],
                'id'         => $cart_item["id"],
                'gia'        => $cart_item["gia"],
                'soluong'    => $cart_item["soluong"],
                'hinhanh'    => $cart_item["hinhanh"]);
            }
        }
        $_SESSION["cart"] = $prd_cart;
        header("location:../../index.php?quanly=giohang");
    }
?>