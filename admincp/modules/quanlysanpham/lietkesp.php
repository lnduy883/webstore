<h2>Liệt kê danh mục sản phẩm: </h2>
<table class="lietke">
    <tr>
        <th>ID Sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Hình ảnh</th>
        <th>Tên danh mục</th>
        <th>Số lượng</th>
        <th>Tình trạng</th>
        <th>Action</th>
    </tr>
    <tr>
<?php 
    $data = new database();
    $data->select("SELECT * FROM sanpham1,danhmuc WHERE sanpham1.id_danhmuc = danhmuc.id_danhmuc");
    while($r = $data->fetch()){
    ?>
        <th><?php echo $r["id_sanpham"]; ?></th>
        <th><?php echo $r["tensanpham"]; ?></th>
        <th><?php echo number_format($r["gia"],0,",","."). " đ"; ?></th>
        <th><img src="../images/<?php echo $r["hinhanh"]; ?>" width="100px" height="100px"></th>
        <th><?php echo $r["tendanhmuc"]; ?></th>
        <th><?php echo $r["soluong"]; ?></th>
        <th><?php 
            if($r["tinhtrang"] == 1){
                echo "Kích hoạt";
            }else{
                echo "Ẩn";
            }
        ?></th>
        <th>
            <a href="?action=suasanpham&id=<?php echo $r["id_sanpham"]; ?>"><input type="submit" name="suasp" value="Sửa"></a>
            <a href="modules/quanlysanpham/xulysp.php?id=<?php echo $r["id_sanpham"]; ?>"><input type="submit" name="xoasp" value="Xóa"></a>
        </th>
    </tr>
     <?php }
?>
</table>

