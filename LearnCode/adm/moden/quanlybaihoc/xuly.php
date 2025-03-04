<?php
include('../../config/config.php');
 if(isset($_POST['them'])){
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
    $hinhanh=$_FILES['hinhanh']['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];

    $sqlthem = "INSERT INTO baihoc(tenbh, mluc, hinhanh, 
    part1, ctiet, part2, ctiet2, part3, ctiet3, part4, ctiet4, iddm) 
    VALUES('$tenbh', '$mluc', '$hinhanh', '$part1', '$ctiet', '$part2', 
    '$ctiet2', '$part3', '$ctiet3', '$part4', '$ctiet4', '$danhmuc')";
    mysqli_query($mysqli, $sqlthem);
    move_uploaded_file($hinhanh_tmp, 'uplo/'. $hinhanh );
    // Chuyển hướng sau khi thêm thành công
    header('Location: ../../index.php?action=quanlybaihoc&query=them');
    exit(); // Kết thúc script để đảm bảo chuyển hướng

 }
?>