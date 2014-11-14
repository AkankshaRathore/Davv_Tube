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
    /*$name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
	//echo $name;
	//echo $temp_name;
	$type= $_FILES['file']['type'];
    if(isset($name)){
        if(!empty($name)){      
            $location = '../images/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                //echo 'uploaded';*/
				
				 $student_register=mysql_query("INSERT INTO `faculty`(fname,lname,gender,DOB,email,dept_name,designation,sen_no) VALUES('".$_POST['f_name']."','".$_POST['l_name']."', '".$_POST['Gender']."', '".$_POST['dob']."','".$_POST['Email']."', '".$_POST['category']."', '".$_POST['designation']."', '".$_POST['sen_no']."')") or die(mysql_error());
				 echo "<br> Wait for a confirmation email from DAVV-Tube.";
          /*  }
        }       
    }  else {
        echo 'please upload';
    }*/
}

?>