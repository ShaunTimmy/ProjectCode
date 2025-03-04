<?php
include('../../config/config.php');
if(isset($_POST['update'])){
    $tenbh = $_POST['tenbh'];
    $mluc = $_POST['mluc'];
    $part1 = $_POST['part1'];
    $ctiet = $_POST['ctiet'];
    $part2 = $_POST['part2'];
    $ctiet2 = $_POST['ctiet2'];
    $part3 = $_POST['part3'];
    $ctiet3 = $_POST['ctiet3'];
    $part4 = $_POST['part4'];
    $ctiet4 = $_POST['ctiet4'];
    $danhmuc = $_POST['danhmuc'];

    // Xử lý hình ảnh
    // $hinhanh = $_FILES['hinhanh']['name'];
    // $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

    // Cập nhật thông tin bài học
    $sqlcapnhat = "UPDATE baihoc SET 
        tenbh='$tenbh',
        mluc='$mluc',
        part1='$part1',
        ctiet='$ctiet', 
        part2='$part2',
        ctiet2='$ctiet2',
        part3='$part3',
        ctiet3='$ctiet3',
        part4='$part4',
        ctiet4='$ctiet4'
        WHERE idbh='$_GET[idbh]'";

    mysqli_query($mysqli, $sqlcapnhat);
    // move_uploaded_file($hinhanh_tmp, 'uplo/' .$hinhanh);

    // Chuyển hướng
    header('Location:../../index.php?action=quanlybaihoc&query=them');
}
?>