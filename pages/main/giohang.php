<div class="cart-page">
    <h2 class="section-title">Giỏ hàng của bạn</h2>

    <table class="cart-table">
        <thead>
            <tr>
                <th>Hình ảnh</th>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ví dụ 1 sản phẩm -->
            <tr>
                <td><img src="images/product1.jpg" alt="SP1"></td>
                <td>Áo thun nam</td>
                <td>250,000đ</td>
                <td>
                    <input type="number" value="1" min="1">
                </td>
                <td>250,000đ</td>
                <td><button class="btn-remove">X</button></td>
            </tr>

            <tr>
                <td><img src="images/product2.jpg" alt="SP2"></td>
                <td>Giày sneaker</td>
                <td>800,000đ</td>
                <td>
                    <input type="number" value="2" min="1">
                </td>
                <td>1,600,000đ</td>
                <td><button class="btn-remove">X</button></td>
            </tr>
        </tbody>
    </table>

    <div class="cart-total">
        <p><strong>Tổng cộng:</strong> 1,850,000đ</p>
        <div class="cart-actions">
            <a href="index.php" class="btn-continue">← Tiếp tục mua hàng</a>
            <a href="index.php?quanly=thanhtoan" class="btn-checkout">Thanh toán</a>
        </div>
    </div>
</div>
