<?php
include("connection.php");
if (isset($_GET["id"])) {
    //echo $_GET["id"];
}
else {
    // Parse the URL
}

// get value of id that sent from address bar 
$i = $_GET['id'];
 $allow_post = "UPDATE forum_question SET status=1 WHERE id='$i'";
 mysql_query($allow_post);
 header( "location: verify_post.php" ); 
?>