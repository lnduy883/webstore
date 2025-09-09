<?php 
    $data = new database();
    $soluong = new database();
    if(isset($_POST["btn-tim-kiem"]) && $_POST["tu-khoa"]!=null){
        $tu_khoa = $_POST["tu-khoa"];
    }else{
        $tu_khoa = "";
    }
    $data->select("SELECT * FROM sanpham1 WHERE tensanpham LIKE '%".$tu_khoa."%' ORDER BY id_sanpham DESC ");
    $soluong->select("SELECT * FROM sanpham1 WHERE tensanpham LIKE '%".$tu_khoa."%' ORDER BY id_sanpham DESC ");
    $i=0;
    while($soluong->fetch()){
        $i++;
    }
?>
<h2>TÌM THẤY <a style="color:blue"><?php echo $i; ?></a> SẢN PHẨM</h2>

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