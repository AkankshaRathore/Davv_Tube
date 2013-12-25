<?php

include("config.php");
	 $student_register=mysql_query("INSERT INTO `student`(`fname`, `lname`, `gender`, `DOB`, `email`, `department`, `course`, `semester`, `enroll_no`, `roll_no`) VALUES('".$_POST['f_name']."', '".$_POST['l_name']."', '".$_POST['Gender']."', '".$_POST['dob']."', '".$_POST['Email']."', '".$_POST['dept_name']."', '".$_POST['course']."', '".$_POST['sem']."', '".$_POST['enroll_no']."', '".$_POST['roll_no']."')") or die(mysql_error());
		echo("Sign Up sucessfully");		
	//header("location:index.html");


?>