<?php
	
     include("config.php");
	//$db = new MySqli('localhost', 'root', '', 'sbadmin');
?>

<?php
	
	
		  $students = $db->query("SELECT * FROM student WHERE status = 0");
		  $students_r = array();
		  
		  while($row = $students->fetch_array()){

			  //default student data
			  $id = $row['id'];
			  $fname = $row['fname'];
			  $lname = $row['lname'];
			  $dept=$row['department'];
			  $enroll = $row['enroll_no'];
			  $roll = $row['roll_no'];
			  $course = $row['course'];
			  $sem = $row['semester'];
			  
			  $image = $image_path.$row['attached_img'];
			  $email=$row['email'];
			  $status=$row['status'];

			  //update status
			  //its false by default since
			  //this is only true if the user clicks
			  //on the span
			  $name_update = false;
			  $age_update = false;

			  //build the array that will store all the student records
			  $students_r[] = array(
				  'id' => $id,
				  'name' => $fname,
				  'docs' => $image,
				  'email' => $email,
				  'status' => $status,
				  'dept'=>$dept,
				  'lname'=>$lname,
				  'enroll'=>$enroll,
				  'roll'=>$roll,
				  'course'=>$course,
				  'sem'=>$sem
				  );
		  }

		  echo json_encode($students_r); //convert the array to JSON string
		
		
		
?>
