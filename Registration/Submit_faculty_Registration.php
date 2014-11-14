<?php
//session_start();
include("config.php");
	 $faculty_register=mysql_query("INSERT INTO `faculty` (`fname`, `lname`, `gender`, `DOB`, `email`, `dept_name`, `designation`, `sen_no`) VALUES('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['gender']."', '".$_POST['dob']."', '".$_POST['email']."', '".$_POST['dept_name']."', '".$_POST['designation']."', '".$_POST['sen_no']."' )") or die(mysql_error());
		echo("Sign Up sucessfully");		
	//header("location:index.html");


?>