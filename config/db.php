<?php
$conn = new mysqli('localhost', 'webiirem_phfdw', 'Webify2020!!', 'webiirem_phfdw');
error_reporting(E_ALL ^ E_NOTICE); // turn ON showing errors
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>