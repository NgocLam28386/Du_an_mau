<div class="row mb ">
    <div class="boxtrai mr ">
        <div class="row">
            <div class="banner">
                <img src="view/img/banner.png" alt="">
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = "index.php?act=chitietsp&idsp=" . $id;
                $hinh = $img_path . $img;
                if ($i == 2 || $i == 5 || $i == 8) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '
                        <div class="boxsp ' . $mr . ' ">
                            <div class="row img">
                                <img src="' . $hinh . '" alt="">
                            </div>
                            <p>' . $price . '$</p>
                            <a href="' . $linksp . '">' . $name . '</a>
                            <div class="row">
                            <form action="index.php?act=addtocart" method="POST">
                                <input type="hidden" name="id" value="' . $id . '">
                                <input type="hidden" name="name" value="' . $name . '">
                                <input type="hidden" name="img" value="' . $price . '">
                                <input class="addcart type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                            </form>
                        </div>
                        </div>
                        ';
                $i++;
            }
            ?>
        </div>

    </div>

    <div class="boxphai ">
        <?php
        include "boxright.php";
        ?>
    </div>
</div>