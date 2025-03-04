<?php
include('../../config/config.php');
if(isset($_POST['update'])){
    $tenblg = $_POST['tenblg'];
    $nxb=$_POST['nxb'];
    $part1 = $_POST['part1'];
    $ctiet1 = $_POST['ctiet1'];
    $part2 = $_POST['part2'];
    $ctiet2 = $_POST['ctiet2'];
    $part3 = $_POST['part3'];
    $ctiet3 = $_POST['ctiet3'];
 


    // Cập nhật thông tin bài học
    $sqlcapnhat = "UPDATE blog SET 
        tenblg='$tenblg',
        nxb='$nxb',
        part1='$part1',
        ctiet1='$ctiet1', 
        part2='$part2',
        ctiet2='$ctiet2',
        part3='$part3',
        ctiet3='$ctiet3'
        WHERE idbg='$_GET[idbg]'";

    mysqli_query($mysqli, $sqlcapnhat);
  
    // Chuyển hướng
    header('Location:../../index.php?action=blog&query=them');
}