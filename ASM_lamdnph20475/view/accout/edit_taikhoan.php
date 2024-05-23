<div class="row mb ">
    <div class="boxtrai mr ">
        <div class="row mb">
            <div class="boxtitle">Câp nhật tài khoản</div>
            <div class="boxcontent row">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="POST" class="form_dk_acc">
                    <div class="form_dk">
                        <p>Email</p>
                    </div>
                    <input class="mb10 form_dk_acc-input" type="email" value="<?= $email ?>" name="email"><br>
                    <div class="form_dk">
                        <P>User</P>
                    </div>
                    <input class="mb10 form_dk_acc-input" type="text" value="<?= $user ?>" name="user"><br>
                    <div class="form_dk">
                        <p>Password</p>
                    </div>
                    <input class="mb10 form_dk_acc-input" type="password" value="<?= $password ?>" name="password"><br>
                    <div class="form_dk">
                        <p>Địa chỉ</p>
                    </div>
                    <input class="mb10 form_dk_acc-input" type="text" value="<?= $address ?>" name="address"><br>
                    <div class="form_dk">
                        <p>Điện thoại</p>
                    </div>
                    <input class="mb10 form_dk_acc-input" type="text" value="<?= $tel ?>" name="tel"><br>
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="submit" name="capnhat" value="Submit">
                    <input type="reset" value="Reset">
                </form>
                <h2 class="noti">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>

    </div>

    <div class="boxphai ">

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
    </div>
</div>