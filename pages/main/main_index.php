<?php 
    $data = new database();
    $data->select("SELECT * FROM sanpham1 ORDER BY id_sanpham DESC");
?>
<h1 class="section-title">SẢN PHẨM MỚI NHẤT</h1>

<ul class="product-list">
    <?php 
        while($r = $data->fetch()){
           ?>     
           <li class="product-item">
               <a href="?quanly=sanpham&id=<?php echo $r["id_sanpham"]; ?>" class="product-link">
                   <img src="images/<?php echo $r["hinhanh"]; ?>" class="product-img">
                   <p class="product-name"><?php echo $r["tensanpham"];?></p>
                   <p class="product-price"><?php echo number_format($r["gia"],0,",",".") . " đ" ; ?></p>
               </a>
           </li>
      <?php  }
    ?>       
</ul>
