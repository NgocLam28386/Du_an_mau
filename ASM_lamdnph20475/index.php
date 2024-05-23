<?php
session_start();
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/pdo.php";
include "model/sanpham.php";
include "view/header.php";
include "global.php";

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();

if ((isset($_GET['act'])) && (($_GET['act']))) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
                $dssp = loadall_sanpham("", $iddm);
                $tendm = load_ten_dm($iddm);
                include "view/sanpham.php";
            } else {
                include "view/home.php";
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case 'chitietsp':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
                include "view/chitietsp.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['password'];
                insert_user($email, $user, $pass);
                $thongbao = "Đăng ký thành công!";
            }
            include "view/accout/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('location: index.php');
                    // $thongbao = "Đăng nhập thành công!";
                } else {
                    $thongbao = "Đăng nhập thất bại!";
                }
            }
            include "view/accout/dangky.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $email, $pass, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                header('location: index.php?act=edit_taikhoan');
            }
            include "view/accout/edit_taikhoan.php";

            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['password'];
                } else {
                    $thongbao = "Email không tồn tại!";
                }
            }
            include "view/accout/quenmk.php";
            break;

        case 'thoat':
            session_unset();
            header('location: index.php');
            break;

        case 'lienhe':
            include "view/lienhe.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
