<div class="sidebar">
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