<?php 
    $id_danhmuc = $_GET["id"];
    $data = new database();
    $data->select("SELECT * FROM danhmuc WHERE id_danhmuc='$id_danhmuc'");
    $r = $data->fetch();
    $data->select("SELECT * FROM sanpham1 WHERE id_danhmuc='$id_danhmuc' ORDER BY id_sanpham DESC");
?>
<h2 class="section-title"><a href="index.php">SẢN PHẨM / </a> <?php echo $r["tendanhmuc"]; ?></h2>

<ul class="product-list">
    <?php
        while($rw = $data->fetch()){
            if($rw["tinhtrang"] == 1){
                ?>
                <li class="product-item">
                    <a href="?quanly=sanpham&id=<?php echo $rw["id_sanpham"]; ?>" class="product-link">
                        <img src="images/<?php echo $rw["hinhanh"]; ?>" class="product-img">
                        <p class="product-name"><?php echo $rw["tensanpham"]; ?></p>
                        <p class="product-price">Giá: <?php echo number_format($rw["gia"],0,",",".") . " đ" ; ?></p>
                        <p class="product-stock">Số lượng: <?php echo $rw["soluong"]; ?></p>
                    </a>
                </li>
            <?php }
        } 
    ?>
</ul>
