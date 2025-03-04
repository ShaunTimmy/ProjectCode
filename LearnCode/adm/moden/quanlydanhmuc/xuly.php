<?php
include('../../config/config.php');
  if(isset($_POST['up'])){
    $tendm=$_POST['tendm'];
    $sqlcapnhat="UPDATE danhmuc SET tendm='".$tendm."'
     WHERE iddm='$_GET[iddm]'";
    mysqli_query($mysqli,$sqlcapnhat);
    header('Location:../../index.php?action=quanlydanhmuc&query=them');
    exit;
  }
?>