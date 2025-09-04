<h2 class="table-title">Liệt kê danh mục sản phẩm:</h2>
<table class="table-admin lietke">
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
        <td><?php echo $r["id_sanpham"]; ?></td>
        <td><?php echo $r["tensanpham"]; ?></td>
        <td><?php echo number_format($r["gia"],0,",","."). " đ"; ?></td>
        <td><img src="../images/<?php echo $r["hinhanh"]; ?>" width="80px" height="80px"></td>
        <td><?php echo $r["tendanhmuc"]; ?></td>
        <td><?php echo $r["soluong"]; ?></td>
        <td>
            <?php 
                if($r["tinhtrang"] == 1){
                    echo "<span class='status-active'>Kích hoạt</span>";
                }else{
                    echo "<span class='status-inactive'>Ẩn</span>";
                }
            ?>
        </td>
        <td class="action-cell">
            <a class="btn-edit" href="?action=suasanpham&id=<?php echo $r["id_sanpham"]; ?>">Sửa</a>
            <a class="btn-delete" href="modules/quanlysanpham/xulysp.php?id=<?php echo $r["id_sanpham"]; ?>">Xóa</a>
        </td>
    </tr>
     <?php }
?>
</table>
