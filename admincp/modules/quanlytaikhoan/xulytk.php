<?php 
    include "../../config/connect.php";
    session_start();
    if(isset($_GET["action"]) && $_GET["action"]=="dangxuat"){
        unset($_SESSION["admin"]);
        header("location:../../login.php");
    }
?>