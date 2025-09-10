<?php 
    if(!isset($_SESSION["thanhvien"])){
        header("location:index.php");
    }
?>
<h2 class="pw-title">Đổi mật khẩu</h2>
<form action="pages/main/xulytv.php" method="post" class="pw-form">
    <table class="pw-table">
        <tr>
            <th class="pw-label">Mật khẩu cũ:</th>
            <td><input type="password" class="pw-input" name="matkhau_tv" required></td>
            
        </tr>
        <tr>
            <th class="pw-label">Mật khẩu mới:</th>
            <td><input type="password" class="pw-input" name="matkhaumoi_tv" required></td>
        </tr>
        <tr>
            <th class="pw-label">Nhập lại mật khẩu:</th>
            <td><input type="password" class="pw-input" name="matkhaumoi1_tv" required></td>
        </tr>
        <tr>
            <td colspan="2" class="pw-submit">
                <?php 
            if(isset($_SESSION["msg"])){
            echo "<p style='color:red'>"."*".$_SESSION['msg']."</p>";
            unset($_SESSION["msg"]);
            }
            ?>
                <button type="submit" class="pw-button" name="capnhat_tv">Cập nhật</button>
            </td>
        </tr>
    </table>
</form>
