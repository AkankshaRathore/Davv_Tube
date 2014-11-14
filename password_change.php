<?php
include("commonVar.php");
$email = $_POST['email']; 
if($email)
{

$connect = mysql_connect($dbhost,$dbuser,$dbpassword) or die("Couldn't connect!");
mysql_select_db($databaseName) or die("Couldn't find db");

$query= mysql_query("SELECT * From student WHERE email='$email'");
$numrows = mysql_num_rows($query);

	if ($numrows!=0)
	{
	//code to login
	 while ($row = mysql_fetch_assoc($query))
	 	{
			$dbemail = $row['email'];

		}
		if($email==$dbemail)
		{
			//echo "You're in! <a href='member.php'>Click</a> here to enter the member page ";
			//$_SESSION['username']=$username;
			//echo $_SESSION['username'];
			//header("Location:try_DAVV_tube_template/index.php");
			echo "New password has been mailed to you!";
		}
		else
		 echo "This email id is not registered !Please enter email again.";
		
	}
	else
	die("That user does't exist!");

	
}
else
   die("Please enter your email id!");



?>