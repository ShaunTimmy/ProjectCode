<?php
$mysqli=new mysqli("localhost","root","","classcode");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}


// Change character set to utf8
mysqli_set_charset($mysqli,"utf8");

// echo "Current character set is: " . mysqli_character_set_name($mysqli);

?>
