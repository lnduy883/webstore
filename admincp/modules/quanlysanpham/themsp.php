<h2 class="form-title">Thêm sản phẩm</h2>
<form class="form-admin" action="modules/quanlysanpham/xulysp.php" method="post" enctype="multipart/form-data"> 
    <table class="form-table">
        <tr>
            <td class="form-label">Tên sản phẩm</td>
            <td><input class="form-input" type="text" name="tensp"></td>            
        </tr>
        <tr>
            <td class="form-label">Giá bán</td>
            <td><input class="form-input" type="text" name="giasp"></td>
        </tr>
        <tr>
            <td class="form-label">Hình ảnh</td>
            <td><input class="form-input" type="file" name="hinhanhsp"></td>
        </tr>
        <tr>
            <td class="form-label">Danh mục</td>
            <td>
                <select class="form-select" name="id_danhmuc">
                <?php 
                 $data = new database();
                $data->select("SELECT * FROM danhmuc");
                while($r = $data->fetch()){
                    ?>
                    <option value="<?php echo $r["id_danhmuc"]; ?>"><?php echo $r["tendanhmuc"]; ?></option>
                <?php }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="form-label">Số lượng</td>
            <td><input class="form-input" type="text" name="soluongsp"></td>
        </tr>
        <tr>
            <td class="form-label">Tình trạng</td>
            <td>
                <select class="form-select" name="tinhtrangsp">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
    </table>
    <div class="form-action">
        <input class="btn-submit" type="submit" name="themsp" value="Thêm sản phẩm">
    </div>
</form>
