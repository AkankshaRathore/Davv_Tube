<?php 

session_start(); 
//include_once $_SERVER['DOCUMENT_ROOT'] . 'securimage/securimage.php';
include_once 'securimage/securimage.php';

$securimage = new Securimage();
if ($securimage->check($_POST['captcha_code']) == false) {
  // the code was incorrect
  // you should handle the error so that the form processor doesn't continue

  // or you can use the following code if there is no validation or you do not know how
  echo "The security code entered was incorrect.<br /><br />";
  echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
  exit;
}

?>

<?php 
include('config.php');
 if(isset($_POST['submit'])){
    /*
     $ext = substr($_FILES['file']['name'], strpos($_FILES['name']['name'],'.'), strlen($_FILES['name']['name'])-1);  
    
    $_FILES['file']['name'] = $_POST['roll_no'].$ext;
   */
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
	//echo $name;
	//echo $temp_name;
	$type= $_FILES['file']['type'];
    if(isset($name)){
        if(!empty($name)){      
            $location = '../images/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                //echo 'uploaded';
				echo "<br> Wait for a confirmation email from DAVV-Tube.";
				 $student_register=mysql_query("INSERT INTO `student`(fname,lname,gender,DOB,email,department,course,semester,enroll_no,roll_no, attached_img,type) VALUES('".$_POST['f_name']."','".$_POST['l_name']."', '".$_POST['Gender']."', '".$_POST['dob']."','".$_POST['Email']."', '".$_POST['category']."', '".$_POST['course']."', '".$_POST['sem']."', '".$_POST['enroll_no']."', '".$_POST['roll_no']."', '".$_FILES["file"]["name"]."','".$_FILES['file']['type']."')") or die(mysql_error());
            }
        }       
    }  else {
        echo 'please upload';
    }
}

?>