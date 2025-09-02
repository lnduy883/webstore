<?php 
    $data = new database();
    $data->select("SELECT * FROM danhmuc");
?>
<div id="menu">
    <ul>
        <li><a href="index.php">Trang chủ</a></li>
        <li>
            <a href="index.php">Sản phẩm</a>
            <ul class="sub_menu">
             <?php 
            while($r = $data->fetch()){
            ?>
            <li>
            <a href="index.php?quanly=danhmucsanpham&id=<?php echo $r["id_danhmuc"]; ?>"><?php echo $r["tendanhmuc"]; ?></a>
            </li>
        <?php }
            ?>
            </ul>
        </li>    
        <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
        <li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
        <li><a href="index.php?quanly=tintuc">Tin Tức</a></li>
    </ul>
</div>