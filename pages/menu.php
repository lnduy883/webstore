<?php 
    $data = new database();
    $data->select("SELECT * FROM danhmuc");
    session_start();
?>
<div id="menu">
    <ul>
        <li><a href="index.php">Trang chủ</a></li>
        <li>
            <a href="index.php">Sản phẩm</a>
            <ul class="sub_menu">
             <?php 
            while($r = $data->fetch()){
            ?>
            <li>
            <a href="index.php?quanly=danhmucsanpham&id=<?php echo $r["id_danhmuc"]; ?>"><?php echo $r["tendanhmuc"]; ?></a>
            </li>
        <?php }
            ?>
            </ul>
        </li>    
        <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
        <li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
        <li><a href="index.php?quanly=tintuc">Tin tức</a></li>
        <li>
            <a href="index.php?quanly=dangnhaptv">Tài khoản</a>
            <ul class="sub_menu">                 
                 <?php 
                    if(isset($_SESSION["thanhvien"])){
                    ?>
                    <li class="xin-chao"><?php 
                    if(isset($_SESSION["thanhvien"])){
                     echo "Xin chào: " . $_SESSION["thanhvien"];
                        }
                    ?></li>
                    <li><a href="index.php?quanly=thongtintv">Thông tin</a></li>
                    <li><a href="index.php?quanly=doimatkhautv">Đổi mật khẩu</a></li>
                    <li><a href="pages/main/xulytv.php?dangxuat=1">Đăng xuất</a></li>
                   <?php }else{
                    ?> 
                    <li><a href="dangnhaptv.php">Đăng nhập</a></li>
                    <li><a href="index.php?quanly=dangkytv">Đăng ký thành viên</a></li>
                   <?php }
                 ?>
                
                
            </ul>
        </li>
             
    </ul>
    
</div>
