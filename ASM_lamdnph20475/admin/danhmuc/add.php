<div class="row">
    <div class="row formtitle">
        <h1>Thêm mới loại hàng hóa</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=adddm" method="post">
            <!-- <div class="row mb10">
                <p style="
                    font-size: 12px;
                    margin-bottom: 4px;
                    font-weight: bold;">Tên loại</p>
                <input type="text" name="iddm">
            </div> -->
            <div class="row mb10">
                <p style="
                    font-size: 12px;
                    margin-bottom: 4px;
                    font-weight: bold;">Tên loại</p>
                <input type="text" name="tenloai">
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm mới">
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