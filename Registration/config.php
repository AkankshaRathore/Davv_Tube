<?php
include("../commonVar.php");
$con=mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($databaseName, $con) or die(mysql_error());
?>
