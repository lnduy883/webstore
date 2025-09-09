

<div class="sidebar">
    <form action="index.php?quanly=timkiem" method="post" class="search-form">
    <p>
      <input type="text" name="tu-khoa" class="search-input" placeholder="Nhập tên sản phẩm...">
      <input type="submit" name="btn-tim-kiem" class="search-button" value="Tìm kiếm">
    </p>
  </form>

    <h3>Danh mục sản phẩm</h3>
    <ul class="list_sidebar">
<?php 
    $data = new database();
    $data->select("SELECT * FROM danhmuc");
    while($r = $data->fetch()){
   ?>     
        <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $r["id_danhmuc"] ?>"><?php echo $r["tendanhmuc"]; ?></a></li>  
    <?php }
?>
    
    </ul>
</div>