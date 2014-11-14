<?php
include("../../commonVar.php");
$host=$dbhost; // Host name 
$username=$dbuser; // Mysql username 
$password=$dbpassword; // Mysql password 
$db_name=$databaseName; // Database name 


// Connect to server and select database.
mysql_connect($host, $username, $password)or die("cannot connect"); 
mysql_select_db($db_name)or die("cannot select DB");

?>