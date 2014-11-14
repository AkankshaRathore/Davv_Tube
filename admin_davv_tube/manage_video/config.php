<?php
include("../../commonVar.php");
// set up DB
$conn = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($databaseName);
$set_path=$host.$folderName."/admin_davv_tube/";
$user_template_path=$host.$folderName."/";
?>