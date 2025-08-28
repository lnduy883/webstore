<?php 
    $data = new database();
    $data->select("SELECT * FROM danhmuc");
?>
<div class="menu">
    <ul class="list_menu">
        <li><a href="index.php">Trang chủ</a></li>
        <?php 
            while($r = $data->fetch()){
                ?>
                <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $r["id_danhmuc"]; ?>"><?php echo $r["tendanhmuc"]; ?></a></li>
           <?php }
        ?>
        <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
        <li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
        <li><a href="index.php?quanly=tintuc">Tin Tức</a></li>
    </ul>
</div>