<?php 
session_start();
include('config.php');
$set_admin_path=$host.$folderName."/admin_davv_tube/";
$set_user_template_path=$host.$folderName."/try_DAVV_tube_template/";
if(isset($_SESSION['aid'])) {
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <style>
	body {margin-top: 60px;}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $set_admin_path;?>index.php">DAVV Tube</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Videos<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="upload_video.php">Upload Video</a></li>
            <li><a href="<?php echo $set_admin_path;?>manage_video/manage_video.php">Manage Video</a></li>
			<li><a href="<?php echo $set_user_template_path;?>index.php">Browse Video</a></li>
            </ul>
			</li>
                 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">User Verification<b class="caret"></b></a>
                      <ul class="dropdown-menu">
			<li><a href="<?php echo $set_admin_path;?>VerifyUser/verification.php">Student</a></li>
       			 <li><a href="<?php echo $set_admin_path;?>VerifyUser/faculty_verification.php">Faculty</a></li>
                       </ul>
		</li>
			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Verify Blog<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="admin_forum/verify_post.php">Post</a></li>
			<li><a href="admin_forum/verify_reply.php">Reply</a></li>
            </ul>
			</li>
			<li><a href="<?php echo $set_admin_path;?>analytics.php">Analytics</a></li>
            <li><a href="admin_logout.php">Sign out</a>
			<!--<ul class="dropdown-menu">
			<li><a href="#">Change Password</a></li>
            </ul>-->
			</li>
          </ul>
        </div>
			
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
<?php }
else {
header ("location:../admin_login.php");
}
?>