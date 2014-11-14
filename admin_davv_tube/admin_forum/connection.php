<?php
include("../../commonVar.php");
/*$host="mysql13.000webhost.com"; // Host name 
$username="a7561422_root"; // Mysql username 
$password="tubedau7"; // Mysql password 
$db_name="a7561422_dtube"; // Database name 

*/
// Connect to server and select database.
mysql_connect($dbhost, $dbuser, $dbpassword)or die("cannot connect"); 
mysql_select_db($databaseName)or die("cannot select DB");
$set_path=$host.$folderName."/admin_davv_tube/";
$user_template_path=$host.$folderName."/";
?>