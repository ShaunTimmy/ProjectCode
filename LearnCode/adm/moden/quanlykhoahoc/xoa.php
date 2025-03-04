<?php
include('../../config/config.php');
  $idkh=$_GET['idkh'];
  $sql="DELETE FROM khoahoc WHERE idkh='$idkh'";
  mysqli_query($mysqli,$sql);
  header('Location:../../index.php?action=quanlykhoahoc&query=them');
  exit;
?>