<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div>
        <div class="row mb">
            <div class="boxtitle">Bình Luận</div>
            <div class="boxcontent2 menudoc">
                <table>
                    <?php
                    foreach ($dsbl as $bl) {
                        extract($bl);
                        echo '<tr><td class="tdcmt">' . $noidung . ' </td>';
                        echo '<td class="tdcmt">' . $iduser . ' </td>';
                        echo '<td class="tdcmt">' . $ngaybinhluan . ' </td></tr>';
                    }
                    ?>

                </table>
            </div>
            <div class="boxfooter searbox">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="form_submit">
                    <input type="hidden" name="idpro" value="<?= $idpro ?>">
                    <input type="text" name="noidung" id="">
                    <input type="submit" value="Gửi" name="guibinhluan">
                </form>
            </div>
        </div>

        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }

        ?>
    </div>

</body>

</html>