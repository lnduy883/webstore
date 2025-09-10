<?php 
    if(!isset($_SESSION["thanhvien"])){
        header("location:index.php");
    }
?>
<?php 
    $data = new database();
    $taikhoan_tv = $_SESSION["thanhvien"];
    $data->select("SELECT * FROM thanhvien WHERE taikhoan_tv = '$taikhoan_tv'");
    $row=$data->fetch();
?>
<h2 class="member-title">Thông tin thành viên</h2>
<table class="member-table">
    <tr>
        <th class="member-label">Tên tài khoản:</th>
        <td class="member-data"><a href=""><?php echo $row["taikhoan_tv"]; ?></a></td>
    </tr>
    <tr>
        <th class="member-label">Email:</th>
        <td class="member-data"><a href=""><?php echo $row["email_tv"]; ?></a></td>
    </tr>
    <tr>
        <th class="member-label">Số điện thoại:</th>
        <td class="member-data"><a href=""><?php echo $row["sdt_tv"]; ?></a></td>
    </tr>
</table>
