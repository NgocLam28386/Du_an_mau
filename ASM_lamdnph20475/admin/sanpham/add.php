<div class="row">
    <div class="row formtitle">
        <h1>Thêm mới sản phẩm</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <p style="
                    font-size: 12px;
                    margin-bottom: 4px;
                    font-weight: bold;">Danh mục</p>
                <select name="iddm">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                <p style="
                    font-size: 12px;
                    margin-bottom: 4px;
                    font-weight: bold;">Tên sản phẩm</p>
                <input type="text" name="tensp">
            </div>
            <div class="row mb10">
                <p style="
                    font-size: 12px;
                    margin-bottom: 4px;
                    font-weight: bold;">Giá</p>
                <input type="text" name="giasp">
            </div>
            <div class="row mb10">
                <p style="
                    font-size: 12px;
                    margin-bottom: 4px;
                    font-weight: bold;">Hình ảnh</p>
                <input type="file" name="hinh">
            </div>
            <div class="row mb10">
                <p style="
                    font-size: 12px;
                    margin-bottom: 4px;
                    font-weight: bold;">Mô tả</p>
                <textarea name="mota" id="" cols="100" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm mới">
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