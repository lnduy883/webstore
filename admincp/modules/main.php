  <!-- Nội dung chính -->
    <div id="main" class="admin-main">  
        <?php
            if(isset($_GET['action'])){
                $tam  = $_GET['action'];
            }else{
                $tam = '';
            }
            if($tam=='quanlydanhmucsanpham'){
                include "quanlydanhmucsp/them.php";
                include "quanlydanhmucsp/lietke.php";
            }else if($tam=='suadanhmucsanpham'){
                include "quanlydanhmucsp/sua.php";
            }else if($tam=="quanlysanpham"){
                include "quanlysanpham/themsp.php";
                include "quanlysanpham/lietkesp.php";
            }else if($tam=="suasanpham"){
                include "quanlysanpham/suasp.php";
            }else{
                include "modules/dashboard.php";
            }
        ?>
    </div>
</div>