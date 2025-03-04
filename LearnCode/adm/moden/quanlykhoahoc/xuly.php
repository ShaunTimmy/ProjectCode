<?php
include('../../config/config.php');
 if(isset($_POST['themkh'])){
    $tenkh = $_POST['tenkh'];
    $mtieu = $_POST['mtieu'];
    $noidung = $_POST['noidung'];
    $tlg = $_POST['tlg'];
    $hocphi = $_POST['hocphi'];
    $lichhoc = $_POST['lichhoc'];
    $danhmuc = $_POST['danhmuc'];
     
    // Xử lý hình ảnh
    $hinhanh=$_FILES['hinhanh']['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];

    $sqlthem = "INSERT INTO khoahoc(tenkh, hinhanh , mtieu, 
    noidung, tlg, lichhoc, hocphi, iddm) 
    VALUES('$tenkh', '$hinhanh ', '$mtieu', '$noidung', '$tlg', 
    '$lichhoc', '$hocphi',  '$danhmuc')";
    mysqli_query($mysqli, $sqlthem);
    move_uploaded_file($hinhanh_tmp, 'uplo/'. $hinhanh );
    // Chuyển hướng sau khi thêm thành công
    header('Location: ../../index.php?action=quanlykhoahoc&query=them');
    exit(); // Kết thúc script để đảm bảo chuyển hướng

 }
?>