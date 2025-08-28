<h2>Thêm sản phẩm</h2>
<form action="modules/quanlysanpham/xulysp.php" method="post" enctype="multipart/form-data"> 
    <table class="tb_themsp">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensp" ></td>            
        </tr>
        <tr>
            <td>Giá bán</td>
            <td><input type="text" name="giasp"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanhsp"></td>
        </tr>
        <tr>
            <td>Danh mục</td>
            <td><select name="id_danhmuc">
            <?php 
             $data = new database();
            $data->select("SELECT * FROM danhmuc");
            while($r = $data->fetch()){
                ?>
                <option value="<?php echo $r["id_danhmuc"]; ?>"><?php echo $r["tendanhmuc"]; ?></option>
            <?php }
            ?>
            
            </select></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluongsp"></td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrangsp">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
    </table>
        <input type="submit" name="themsp" value="Thêm sản phẩm">
</form>
