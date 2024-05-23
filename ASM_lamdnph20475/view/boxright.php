<div class="row mb">
    <div class="boxtitle">Tài Khoản</div>
    <div class="boxcontent form-acc">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="row mb10">
                Xin chào <br>
                <?= $user ?>
            </div>
            <div class="row mb10">
                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                <?php
                if ($role == 1) {
                ?>
                    <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                <?php } ?>
                <li><a href="index.php?act=thoat">Thoát</a></li>
            </div>
        <?php
        } else {
        ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    Tên tài khoản <br>
                    <input type="text" name="user" id>
                </div>
                <div class="row mb10">
                    Mật Khẩu <br>
                    <input type="password" name="pass" id><br>
                </div>
                <div class="row mb10">
                    <input type="checkbox" name="" id="">
                    Ghi nhớ tài khoản
                </div>
                <div class="row mb10">
                    <input type="submit" name="dangnhap" value="Đăng nhập">
                </div>
            </form>
        <?php } ?>
        <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
        <li><a href="index.php?act=dangky">Đăng kí tài khoản</a></li>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle">Danh Mục</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li>
                                <a href="' . $linkdm . '">' . $name . '</a>
                            </li>
                            ';
            }
            ?>

        </ul>
    </div>
    <div class="boxfooter searbox">
        <form action="index.php?act=sanpham" method="post" class="form_submit">
            <input type="text" name="kyw" id="">
            <input type="submit" value="Tìm kiếm" name="timkiem">
        </form>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle">Top 10 Yêu Thích</div>
    <div class="boxcontent row">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=chitietsp&idsp=" . $id;
            $img = $img_path . $img;
            echo '<div class="row mb10 top10">
                            <div class="favour-img">
                                <img src="' . $img . '" alt="">
                            </div>
                            <a href="' . $linksp . '">' . $name . '</a>
                        </div>
                        ';
        }
        ?>
    </div>
</div>