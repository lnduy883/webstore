<h2>Liệt kê danh mục sản phẩm: </h2>
<table class="lietke">
    <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Action</th>
    </tr>
<?php
    $sql_lietke = new database();
    $sql_lietke->select("SELECT * FROM danhmuc ORDER BY id_danhmuc DESC");
    while($r = $sql_lietke->fetch()){
        ?>
    <tr>
        <td><?php echo $r["id_danhmuc"]; ?></td>
        <td><?php echo $r["tendanhmuc"]; ?></td>
        <td>
            <a href="?action=suadanhmucsanpham&id=<?php echo $r["id_danhmuc"] ?>&name=<?php echo $r["tendanhmuc"]; ?>"><input type="submit" name="sua" value="Sửa"></a>
            <a href="modules/quanlydanhmucsp/xuly.php?action=quanlydanhmuc&id=<?php echo $r["id_danhmuc"] ?>"><input type="submit" name="xoa" value="Xóa"></a>
        </td>
    </tr>


   <?php }
?>

</table>