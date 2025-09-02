<?php
 session_start(); 
 ?>
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
            <?php 
            if(isset($_SESSION["cart"])){
                $tongtien = 0;
                foreach($_SESSION["cart"] as $cart_item){
                    $thanhtien = $cart_item["gia"]*$cart_item["soluong"];
                    $tongtien += $thanhtien; 
            ?>
                <tr>
                <td><img src="images/<?php echo $cart_item["hinhanh"]; ?>" alt="<?php echo $cart_item["hinhanh"]; ?>"></td>
                <td><?php echo $cart_item["tensanpham"]; ?></td>
                <td><?php echo number_format($cart_item["gia"],0,",",".") . " đ" ?></td>
                <td>
                    <input type="number" value="<?php echo $cart_item["soluong"]; ?>" min="1">
                </td>
                <td><?php echo number_format($thanhtien,0,",",".")." đ"; ?></td>
                <td><button class="btn-remove">X</button></td>
            </tr>
              <?php  }
              }else{
                echo "Hiện chưa có sản phẩm nào trong giỏ hàng!";
              }
            ?>

        </tbody>
    </table>

    <div class="cart-total">
        <p><strong>Tổng cộng:</strong> <?php if(isset($_SESSION["cart"])){
            echo number_format($tongtien,0,",",".")." đ";
        }else{
            echo "0đ";
        }
         ?></p>
        <div class="cart-actions">
            <a href="index.php" class="btn-continue">← Tiếp tục mua hàng</a>
            <a href="index.php?quanly=thanhtoan" class="btn-checkout">Thanh toán</a>
        </div>
    </div>
</div>
