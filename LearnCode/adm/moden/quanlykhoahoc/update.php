<?php
include('../../config/config.php');
if(isset($_POST['upkh'])){
    $tenkh = $_POST['tenkh'];
    $mtieu = $_POST['mtieu'];
    $noidung = $_POST['noidung'];
    $tlg = $_POST['tlg'];
    $hocphi = $_POST['hocphi'];
    $lichhoc = $_POST['lichhoc'];
    $danhmuc = $_POST['danhmuc'];
     
    // Xử lý hình ảnh
    // $hinhanh=$_FILES['hinhanh']['name'];
    // $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];

    // Cập nhật thông tin bài học
    $sqlcapnhat = "UPDATE khoahoc SET 
        tenkh='$tenkh',
        mtieu='$mtieu',
        noidung='$noidung',
        tlg='$tlg', 
        hocphi='$hocphi',
        lichhoc='$lichhoc'
        WHERE idkh='$_GET[idkh]'";

    mysqli_query($mysqli, $sqlcapnhat);
    // move_uploaded_file($hinhanh_tmp, 'uplo/' .$hinhanh);

    // Chuyển hướng
    header('Location:../../index.php?action=quanlykhoahoc&query=them');
}
?>