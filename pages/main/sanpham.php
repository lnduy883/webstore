<?php 
    $id_sanpham = $_GET["id"];
    $data = new database();
    $data->select("SELECT * FROM sanpham1,danhmuc WHERE id_sanpham = '$id_sanpham' AND sanpham1.id_danhmuc = danhmuc.id_danhmuc");
    $r = $data->fetch();
?>
<h1>Hãng > <a href="?quanly=danhmucsanpham&id=<?php echo $r["id_danhmuc"]; ?>"><?php echo $r["tendanhmuc"]; ?></a> > <a href="?quanly=sanpham&id=<?php echo $id_sanpham; ?>"><?php echo $r["tensanpham"]; ?></a></h1>
<div class="img_ctsp"><img src="images/<?php echo $r["hinhanh"]; ?>" alt="<?php echo $r["hinhanh"]; ?>" height="600px" width="600px"></div>
<div><div class="title_name_ctsp"><?php echo $r["tensanpham"]; ?></div>
<div class="title_price_ctsp"><?php echo $r["gia"]; ?></div>
<div><?php echo $r["soluong"]; ?></div>
<div><?php echo $r["tendanhmuc"]; ?></div></div>