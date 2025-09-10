<h2 class="dk-title">Đăng ký thành viên</h2>
<form action="pages/main/xulytv.php" method="post">
    <table class="dk-table">
    <tr>
        <td class="dk-label">Tài khoản:</td>
        <th><input type="text" name="taikhoan_tv" class="dk-input" placeholder="Nhập tài khoản" maxlength="20" required></th>
    </tr>
    <tr>
        <td class="dk-label">Mật khẩu:</td>
        <th><input type="password" name="matkhau_tv" class="dk-input" placeholder="Nhập mật khẩu" required></th>
    </tr>
    <tr>
        <td class="dk-label">Email:</td>
        <th><input type="email" name="email_tv" class="dk-input" placeholder="Nhập email" required></th>
    </tr>
    <tr>
        <td class="dk-label">Số điện thoại:</td>
        <th><input type="text" class="dk-input" name="sdt_tv" placeholder="Nhập số điện thoại" pattern="[0-9]{10,11}" required></th>
    </tr>
    <tr>
        <th colspan="2" class="dk-submit">
            <button type="submit" class="dk-button" name="dk-tv">Đăng ký</button>
        </th>
    </tr>
</table>
</form>