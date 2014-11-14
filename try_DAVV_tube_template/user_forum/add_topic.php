<?php
include("connection.php");

// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO forum_question(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysql_query($sql);

if($result){
//echo "Successful<BR>";
header("location: main_blog.php");
}
else {
echo "ERROR";
}
//mysql_close(); // Commented By komal Rathore
?>
