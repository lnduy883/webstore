<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION["thanhvien"])){
    header("location:dangnhaptv.php");
}
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
                <td><form action="pages/main/themgiohang.php" method="post">
                    <input type="text" name="idsp" value="<?php echo $cart_item["id"]; ?>" hidden >
                    <input type="number" value="<?php echo $cart_item["soluong"]; ?>" min="1" name="soluong" onchange="this.form.submit()">
                </form></td>
                <td><?php echo number_format($thanhtien,0,",",".")." đ"; ?></td>
                <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item["id"]; ?>"><button class="btn-remove">X</button></a></td>
            </tr>
              <?php  }
              }else{ ?>
              <tr>
             <td colspan=6><?php  echo "Hiện chưa có sản phẩm nào trong giỏ hàng!"; ?> </td> 
         <?php     }  
            ?>
            </tr>
        </tbody>
    </table>
    <a href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả sản phẩm</a>
    <div class="cart-total">
        <p><strong>Tổng cộng:</strong> <?php if(isset($_SESSION["cart"])){
            echo number_format($tongtien,0,",",".")." đ";
        }else{
            echo "0đ";
        }
         ?></p>
        <div class="cart-actions">
            <a href="index.php" class="btn-continue">← Tiếp tục mua hàng</a>
            <a href="index.php?quanly=giohang-thanhtoan" class="btn-checkout">Đặt hàng</a>
        </div>
    </div>
</div>