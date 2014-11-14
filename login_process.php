<?php
include("commonVar.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username && $password)
{

$connect = mysql_connect($dbhost,$dbuser,$dbpassword) or die("Couldn't connect!");
mysql_select_db($databaseName) or die("Couldn't find db");

$query= mysql_query("SELECT * From user WHERE u_name='$username'");
$numrows = mysql_num_rows($query);

	if ($numrows!=0)
	{
	//code to login
	 while ($row = mysql_fetch_assoc($query))
	 	{
			$dbusername = $row['u_name'];
			$dbpassword = $row['psw'];
		}
		if($username==$dbusername&&$password==$dbpassword)
		{
			//echo "You're in! <a href='member.php'>Click</a> here to enter the member page ";
			//$_SESSION['id']=$row['uid'];
			$_SESSION['username']=$username;
			//echo $_SESSION['username'];
			header("Location:try_DAVV_tube_template/index.php");
		}
		else
		 echo "Incorrect password!";
		
	}
	else
	die("That user does't exist!");

	
}
else
   die("Please enter  username and Password!");

?>