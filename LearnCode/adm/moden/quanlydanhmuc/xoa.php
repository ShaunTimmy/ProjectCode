<?php
include('../../config/config.php');
  $iddm=$_GET['iddm'];
  $sql="DELETE FROM danhmuc WHERE iddm='$iddm'";
  mysqli_query($mysqli,$sql);
  header('Location:../../index.php?action=quanlydanhmuc&query=them');
  exit;
?>