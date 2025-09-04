<h2 class="table-title">Liệt kê danh mục sản phẩm</h2>
<div class="table-wrapper">
    <table class="table-admin lietke">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql_lietke = new database();
            $sql_lietke->select("SELECT * FROM danhmuc ORDER BY id_danhmuc DESC");
            while($r = $sql_lietke->fetch()){
        ?>
            <tr>
                <td><?php echo $r["id_danhmuc"]; ?></td>
                <td><?php echo $r["tendanhmuc"]; ?></td>
                <td class="action-cell">
                    <a class="btn-action btn-edit" href="?action=suadanhmucsanpham&id=<?php echo $r["id_danhmuc"] ?>&name=<?php echo $r["tendanhmuc"]; ?>">
                        <i class="fas fa-edit"></i> Sửa
                    </a>
                    <a class="btn-action btn-delete" href="modules/quanlydanhmucsp/xuly.php?action=quanlydanhmuc&id=<?php echo $r["id_danhmuc"] ?>">
                        <i class="fas fa-trash-alt"></i> Xóa
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
