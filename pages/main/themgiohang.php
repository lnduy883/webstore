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
            }
        } else {
            $_SESSION["cart"][] = $prd_cart;
        }
    }
    }
    header("location:../../index.php?quanly=giohang");
?>