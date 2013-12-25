<?php
$con = mysql_connect("localhost","root","");
  if (!$con)
  		{
  			echo ("Could not connect to database");
  		}  
$connection_string=mysql_select_db("davv_tube",$con);
?>