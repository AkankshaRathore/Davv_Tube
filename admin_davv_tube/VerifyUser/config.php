<?php
include("../../commonVar.php");
$host = $dbhost;
$database = $databaseName;
$user = $dbuser;
$password =$dbpassword;
$db = mysqli_connect("$host","$user","$password","$database");

?>