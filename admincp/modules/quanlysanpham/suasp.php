<?php 
    $id_sp = $_GET["id"];
    $data = new database();
    $data->select("SELECT * FROM sanpham1 WHERE id_sanpham='$id_sp'");
    $r = $data->fetch();
?>

<h2>Chỉnh sửa sản phẩm</h2>
<form action="modules/quanlysanpham/xulysp.php" method="post" enctype="multipart/form-data">
<table class="tb_themsp">
    <input type="text" name="idsp" hidden value="<?php echo $id_sp ?>">
    <tr>
       <td>Tên sản phẩm</td>
       <td><input type="text" name="tensp" value="<?php echo $r["tensanpham"]; ?>"></td>
    </tr>
    <tr>
        <td>Giá tiền</td>
        <td><input type="text" name="giasp" value="<?php echo $r["gia"]; ?>"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td>
            <img src="../images/<?php echo $r["hinhanh"]; ?>" alt="<?php echo $r["hinhanh"]; ?>" height="200px" width="200px">
            <input type="file" name="hinhanhsp">
            <input type="text" name="hinhanhsptruoc" hidden value="<?php echo $r["hinhanh"]; ?>" name="hinhanhtruoc">
        </td>
    </tr>
    <tr>
        <td>Danh mục</td>
        <td><select name="id_danhmuc">
            <?php  
            $data_danhmuc = new database();
            $data_danhmuc->select("SELECT * FROM danhmuc");
            while($rw = $data_danhmuc->fetch())
            { ?>
            <?php if($rw["id_danhmuc"] == $r["id_danhmuc"]){
                ?> <option selected value="<?php echo $rw["id_danhmuc"]; ?>"><?php echo $rw["tendanhmuc"]; ?></option> 
                <?php
            }else{
                ?>
                <option  value="<?php echo $rw["id_danhmuc"]; ?>"><?php echo $rw["tendanhmuc"]; ?></option>
           <?php } ?>
            
                    
  <?php  }
?>
        </select></td>
    </tr>
    <tr>
        <td>Số lượng</td>
        <td><input type="text" name="soluongsp" value="<?php echo $r["soluong"]; ?>"></td>
    </tr>
    <tr>
        <td>Tình trạng</td>
        <td>
            <select name="tinhtrangsp">
                <?php 
                if($r["tinhtrang"]==1){
                    ?>
                    <option selected value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
              <?php }else{ 
                ?>
                    <option value="1">Kích hoạt</option>
                    <option selected value="0">Ẩn</option>
            <?php  }
                ?>
                
            </select>
        </td>
    </tr>
</table>
    <input type="submit" name="suasp" value="Sửa sản phẩm">
</form>



