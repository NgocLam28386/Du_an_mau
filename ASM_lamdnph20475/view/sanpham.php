<div class="row mb ">
    <div class="boxtrai mr ">
        <div class="row mb">

            <div class="boxtitle">Sản phẩm</div>
            <div class="boxcontent row">
                <?php
                $i = 0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=chitietsp&idsp=" . $id;
                    $hinh = $img_path . $img;
                    if ($i == 2 || $i == 5 || $i == 11) {
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
                            </div>
                            ';
                    $i++;
                }
                ?>
            </div>
        </div>

    </div>

    <div class="boxphai ">
        <?php
        include "boxright.php";
        ?>
    </div>
</div>