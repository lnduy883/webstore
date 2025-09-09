<div id="main">
    <?php
        include "sidebar/sidebar.php";
    ?>
<div class="maincontent">    
      
    <?php
        if(isset($_GET['quanly'])){
            $tam  = $_GET['quanly'];
        }else{
            $tam = '';
        }

        if($tam=='danhmucsanpham'){
            include "main/danhmuc.php";
        }else if($tam=='giohang'){
            include "main/giohang.php";
        }else if($tam=="lienhe"){
            include "main/lienhe.php";
        }
        else if($tam=="tintuc"){
            include "main/tintuc.php";
        }else if($tam=="sanpham"){
            include "main/sanpham.php";
        }
        else if($tam=="dangkytv"){
            include "main/dangkytv.php";
        }
        else if($tam=="thongtintv"){
            include "main/thongtintv.php";
        }
        else if($tam=="doimatkhautv"){
            include "main/doimatkhautv.php";
        }else if($tam=="timkiem"){
            include "main/timkiem.php";
        }else{
            include "main/main_index.php";

        }

    ?>
</div>            
</div>