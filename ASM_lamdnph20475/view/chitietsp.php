<div class="row mb ">
    <div class="boxtrai mr ">
        <div class="row mb">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle"><?= $name ?></div>
            <div class="boxcontent row">
                <?php
                $img = $img_path . $img;
                echo '<div class ="img_sp"><img src="' . $img . '" alt=""></div>';
                echo '<div class="desc">' . $mota . '</div>';
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanform.php", {
                    idpro: <?= $id ?>
                });
            });
        </script>
        <div class="row mb" id="binhluan">

        </div>
        <div class="row mb">
            <div class="boxtitle">Sản phẩm cùng loại</div>
            <div class="boxcontent row">
                <?php
                foreach ($sp_cung_loai as $spcl) {
                    $linksp = "index.php?act=chitietsp&idsp=" . $id;
                    extract($spcl);
                    echo ' <li><a href="' . $linksp . '">' . $name . '</a></li>';
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