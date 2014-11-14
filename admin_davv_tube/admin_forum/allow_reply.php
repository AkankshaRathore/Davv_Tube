<?php
include("connection.php");
if (isset($_GET["idd"])) {
    //echo $_GET["id"];
}
else {
    // Parse the URL
}

// get value of id that sent from address bar 
$i = $_GET['idd'];
 $allow_post = "UPDATE forum_answer SET a_status=1 WHERE a_id='$i'";
 mysql_query($allow_post);
 header( "location: verify_reply.php" ); 
?>