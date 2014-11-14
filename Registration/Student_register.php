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
function isRegistered($email)
{
/*
This function checks that if the user already registered and not verified by admin than Shows the message "You are already Registered . WAit for  Verification process"
If user have account than Message Should be displayed " You already have an account and Redirect the usr to the user login "
*/
/*
$chkUser=mysql_query("SELECT * FROM user where u_name='$email'");
$num=mysql_num_rows($chkUser);
*/
$chkStud=mysql_query("SELECT * FROM student where email='$email' and status = 0");
$num=mysql_num_rows($chkStud);
if($num>=1)
{
return 1;
}
else
{
return 0;
}
}
function isVerified($email)
{
/*
This function checks that if the user already registered and not verified by admin than Shows the message "You are already Registered . WAit for  Verification process"
If user have account than Message Should be displayed " You already have an account and Redirect the usr to the user login "
*/

$chkUser=mysql_query("SELECT * FROM user where u_name='$email'");
$num=mysql_num_rows($chkUser);
/*
$chkStud=mysql_query("SELECT * FROM student where email='$email' and status = 0");
$num=mysql_num_rows($chkStud);*/
if($num>=1)
{
return 1;
}
else
{
return 0;
}
}


 if(isset($_POST['submit']))
 {
	if(isRegistered($_POST['Email']))
	{
	echo"<center><B>You are already Registered .Contact Administarator for more details.</B></center>"; 
	exit();
	}
	else 
	{
	if(isVerified($_POST['Email']))
	{
	echo"<center><B>You already have an account and you are to the user login Please Wait <Blink>...<blink></B></center>"; 
	header("refresh:10; url=http://localhost/public_html_try/login.php");
	exit();
	}
	else
	{
   // $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
	$filename=$_FILES["file"]["name"];
	$exp=explode(".",$filename);
    $extension=end($exp);
     // $newfilename=$p .".".$extension;
    $name= $_POST['roll_no'].".".$extension;
	//echo $temp_name;
	$type= $_FILES['file']['type'];
    if(isset($name))
	{
        if(!empty($name))
		{      
            $location = '../images/';      
            if(move_uploaded_file($temp_name, $location.$name))
			{
                //echo 'uploaded';
				echo "<br> Wait for a confirmation email from DAVV-Tube.";
				 $student_register=mysql_query("INSERT INTO `student`(fname,lname,gender,DOB,email,department,course,semester,enroll_no,roll_no, attached_img,type) VALUES('".$_POST['f_name']."','".$_POST['l_name']."', '".$_POST['Gender']."', '".$_POST['dob']."','".$_POST['Email']."', '".$_POST['category']."', '".$_POST['course']."', '".$_POST['sem']."', '".$_POST['enroll_no']."', '".$_POST['roll_no']."', '$name','".$_FILES['file']['type']."')") or die(mysql_error());
            }
        }       
    }  else 
	{
        echo 'please upload';
    }
   }
  }
}// End isset
?>