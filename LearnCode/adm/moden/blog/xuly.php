<?php
include('../../config/config.php');
 if(isset($_POST['blg'])){
    $tenblg = $_POST['tenblg'];
    $nxb = $_POST['nxb'];
    $tgia = "Shaun";
    $part1 = $_POST['part1'];
    $ctiet1 = $_POST['ctiet1'];
    $part2 = $_POST['part2'];
    $ctiet2 = $_POST['ctiet2'];
    $part3 = $_POST['part3'];
    $ctiet3 = $_POST['ctiet3'];
  
    // Xử lý hình ảnh
    $hinhanh=$_FILES['hinhanh']['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];

    $sqlthem = "INSERT INTO blog(tenblg,nxb,tgia,hinhanh, 
    part1, ctiet1, part2, ctiet2, part3, ctiet3) 
    VALUES('$tenblg','$nxb', '$tgia', '$hinhanh', '$part1', '$ctiet1', '$part2', 
    '$ctiet2', '$part3', '$ctiet3')";
    mysqli_query($mysqli, $sqlthem);
    move_uploaded_file($hinhanh_tmp, 'uplo/'. $hinhanh );
    // Chuyển hướng sau khi thêm thành công
    header('Location: ../../index.php?action=blog&query=them');
    exit(); // Kết thúc script để đảm bảo chuyển hướng

 }
?>