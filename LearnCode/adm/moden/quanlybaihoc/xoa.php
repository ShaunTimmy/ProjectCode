<?php
include('../../config/config.php');
  $idbh=$_GET['idbh'];
  $sql="DELETE FROM baihoc WHERE idbh='$idbh'";
  mysqli_query($mysqli,$sql);
  header('Location:../../index.php?action=quanlybaihoc&query=them');
  exit;
?>