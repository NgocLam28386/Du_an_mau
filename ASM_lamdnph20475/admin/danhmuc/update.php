<?php
if (is_array($dm)) {
    extract($dm);
}
?>

<div class="row">
    <div class="row formtitle">
        <h1>Cập nhập loại hàng hóa</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb10">
                <p style="
                    font-size: 12px;
                    margin-bottom: 4px;
                    font-weight: bold;">Mã loại</p>
                <input type="text" name="tenloai">
            </div>
            <div class="row mb10">
                <p style="
                    font-size: 12px;
                    margin-bottom: 4px;
                    font-weight: bold;">Tên loại</p>
                <input type="text" value="<?php if (isset($name) && ($name != "")) echo $name ?>" name="tenloai">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id ?>">
                <input type="submit" name="capnhat" value="Cập Nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
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