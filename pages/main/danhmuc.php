<?php 
    $id_danhmuc = $_GET["id"];
    $data = new database();
    $data->select("SELECT * FROM danhmuc WHERE id_danhmuc='$id_danhmuc'");
    $r = $data->fetch();
    $data->select("SELECT * FROM sanpham1 WHERE id_danhmuc='$id_danhmuc' ORDER BY id_sanpham DESC");
?>
<h2>Hãng > <?php echo $r["tendanhmuc"]; ?></h2>
<ul class="list_products">
    <?php
        while($rw = $data->fetch()){
            if($rw["tinhtrang"] == 1){
                ?>
                 <a href="?quanly=sanpham&id=<?php echo $rw["id_sanpham"]; ?>"><li>
                <img src="images/<?php echo $rw["hinhanh"]; ?>" >
                <p class="title_product"><?php echo $rw["tensanpham"]; ?></p>
                <p class="title_price">Giá: <?php echo number_format($rw["gia"],0,",",".") . " đ" ; ?></p>
                <p>Số lượng: <?php echo $rw["soluong"]; ?></p>
            </li></a>
           <?php }
      } 
    ?>
</ul>