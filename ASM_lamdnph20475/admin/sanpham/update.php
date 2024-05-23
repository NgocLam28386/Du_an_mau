<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = '<img src="' . $hinhpath . '" width = "70" alt="">';
} else {
    $hinh = "No Photo";
}

?>

<div class="row">
    <div class="row formtitle">
        <h1>Cập nhập loại hàng hóa</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm">
                    <option value="0">Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($iddm == $id) {
                            echo '<option value="' . $id . '" selected>' . $name . '</option>';
                        } else {
                            echo '<option value="' . $id . '">' . $name . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                <p style="
                    font-size: 12px;
                    margin-bottom: 4px;
                    font-weight: bold;">Tên sản phẩm</p>
                <input type="text" name="tensp" value="<?= $name ?>">
            </div>
            <div class="row mb10">
                <p style="
                    font-size: 12px;
                    margin-bottom: 4px;
                    font-weight: bold;">Giá</p>
                <input type="text" name="giasp" value="<?= $price ?>">
            </div>
            <div class="row mb10">
                <p style="
                    font-size: 12px;
                    margin-bottom: 4px;
                    font-weight: bold;">Hình ảnh</p>
                <input type="file" name="hinh">
                <?= $hinh ?>
            </div>
            <div class="row mb10">
                <p style="
                    font-size: 12px;
                    margin-bottom: 4px;
                    font-weight: bold;">Mô tả</p>
                <textarea name="mota" id="" cols="30" rows="10" value=""><?= $mota ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <br>
            <?php

            if (isset($thongbao) && ($thongbao != ""))
                echo "<h1 class='noti'>$thongbao</h1>";
            ?>
        </form>

    </div>
</div>
</div>