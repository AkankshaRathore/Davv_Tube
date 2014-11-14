<?php
include("../commonVar.php");
$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$databaseName);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  ?>
