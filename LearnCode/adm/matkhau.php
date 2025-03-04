<?php
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
session_start();
include('config/config.php');

if(isset($_POST['chan'])){
    $tkhoan = $_POST['tkhoan'];
    $mkhaumo = $_POST['mkhaumo']; // Đã sửa tên biến
    $trvan = "UPDATE quantri SET mkhau='$mkhaumo' WHERE tkhoan='$tkhoan'";
    
    $res = mysqli_query($mysqli, $trvan);
    
    // Sử dụng mysqli_affected_rows để kiểm tra số hàng bị thay đổi
    if(mysqli_affected_rows($mysqli) > 0){
        echo '<script>alert("Đổi mật khẩu thành công! ");</script>';
        header('Location: login.php');
        exit(); // Dừng script sau khi chuyển hướng
    } else {
        echo '<script>alert("Đã có lỗi xảy ra! Hoặc tài khoản không tồn tại.");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3>Thay Đổi Mật Khẩu</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                        <div class="mb-3">
                                <label for="newPassword" class="form-label">Tên Tài Khoản </label>
                                <input type="text" class="form-control" id="newPassword" name="tkhoan" placeholder="Nhập tên tài khoản">
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label"> Mật Khẩu Mới</label>
                                <input type="password" class="form-control" id="confirmPassword" name="mkhaumo"placeholder=" Mật khẩu mới">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="chan">Thay Đổi Mật Khẩu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>