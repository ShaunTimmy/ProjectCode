<?php
include('../../config/config.php');
  $iddk=$_GET['iddk'];
  $sql="DELETE FROM dangky WHERE iddk='$iddk'";
  mysqli_query($mysqli,$sql);
  header('Location:../../index.php?action=dangkykhoahoc&query=them');
  exit;
?>