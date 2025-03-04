<?php
include('../../config/config.php');
  $idtv=$_GET['idtv'];
  $sql="DELETE FROM tuvan WHERE idtv='$idtv'";
  mysqli_query($mysqli,$sql);
  header('Location:../../index.php?action=dangkytuvan&query=them');
  exit;
?>