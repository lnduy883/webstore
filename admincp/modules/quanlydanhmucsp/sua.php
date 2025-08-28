<?php 
    $id_danhmuc = $_GET["id"];
    $name = $_GET["name"];
?>

<h2>Sửa danh mục sản phẩm</h2>
<form action="modules/quanlydanhmucsp/xuly.php" method="post">
    <input type="text" name="iddanhmuc" hidden value="<?php echo $id_danhmuc ?>">
    <input type="text" name="tendanhmuc" value="<?php echo $name ?>">
    <input type="submit" name="sua" value="Sửa danh mục">
</form>
