<?php 
    $data = new database();
    $data->select("SELECT * FROM sanpham1 ORDER BY id_sanpham DESC");
?>
<h1>SẢN PHẨM MỚI NHẤT</h1>
<ul class="list_products">
    <?php 
        while($r = $data->fetch()){
           ?>     
           <a href="?quanly=sanpham&id=<?php echo $r["id_sanpham"]; ?>"><li>
            <img src="images/<?php echo $r["hinhanh"]; ?>" >
            <p class="title_product"><?php echo $r["tensanpham"];?></p>
            <p class="title_price"><?php echo $r["gia"];?></p>
    </li></a>
      <?php  }
    ?>
                   
</ul>