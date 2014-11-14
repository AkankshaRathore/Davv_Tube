<?php

session_start();


session_destroy();

//echo "You've been logged out. <a href='User_Login3_2.php'>Click here</a> to return.";
header("Location:../index.php");
?>