<?php
include('../../config/config.php');
  $idbg=$_GET['idbg'];
  $sql="DELETE FROM blog WHERE idbg='$idbg'";
  mysqli_query($mysqli,$sql);
  header('Location:../../index.php?action=blog&query=them');
  exit;
?>