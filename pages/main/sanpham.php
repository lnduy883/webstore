<?php 
    $id_sanpham = $_GET["id"];
    $data = new database();
    $data->select("SELECT * FROM sanpham1,danhmuc 
                   WHERE id_sanpham = '$id_sanpham' 
                   AND sanpham1.id_danhmuc = danhmuc.id_danhmuc");
    $r = $data->fetch();

?>

<h1 class="ctsp-breadcrumb">
    Hãng > 
    <a href="?quanly=danhmucsanpham&id=<?php echo $r["id_danhmuc"]; ?>">
        <?php echo $r["tendanhmuc"]; ?>
    </a> > 
    <a href="?quanly=sanpham&id=<?php echo $id_sanpham; ?>">
        <?php echo $r["tensanpham"]; ?>
    </a>
</h1>

<div class="ctsp-container">
    <div class="ctsp-img">
        <img src="images/<?php echo $r["hinhanh"]; ?>" alt="<?php echo $r["hinhanh"]; ?>">
    </div>

    <div class="ctsp-info">
        <div class="ctsp-title"><?php echo $r["tensanpham"]; ?></div>
        <div class="ctsp-price"><?php echo number_format($r["gia"],0,",",".") . " đ" ; ?></div>
        <div class="ctsp-soluong">Số lượng: <?php echo $r["soluong"]; ?></div>
        <div class="ctsp-danhmuc">Danh mục: <?php echo $r["tendanhmuc"]; ?></div>
        <button class="ctsp-addcart">Thêm vào giỏ hàng</button>
    </div>
</div>


