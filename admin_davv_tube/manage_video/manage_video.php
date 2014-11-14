
<?php
session_start();
if(isset($_SESSION['aid'])) {

include('config.php');
/**
 * PHP Grid Component
 *
 * @author Abu Ghufran <gridphp@gmail.com> - http://www.phpgrid.org
 * @version 1.4.6
 * @license: see license.txt included in package
 */
 


// set your db encoding -- for ascent chars (if required)
mysql_query("SET NAMES 'utf8'");

// include and create object
include("inc/jqgrid_dist.php");
$g = new jqgrid();

// set few params
$grid["caption"] = "Edit or Delete  Videos";
$grid["multiselect"] = true;
$g->set_options($grid);

// set database table for CRUD operations
//---------------------------------------------------------------set--table--name--here----------------------

$g->table = "video_list";
//---------------------------------------------------------------set--table--name--above----------------------
// subqueries are also supported now (v1.2)
// $g->select_command = "select * from (select * from invheader) as o";
			
// render grid
$out = $g->render("list1");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" type="text/css" media="screen" href="js/themes/redmond/jquery-ui.custom.css"></link>	
	<link rel="stylesheet" type="text/css" media="screen" href="js/jqgrid/css/ui.jqgrid.css"></link>	
	 <link href="../css/bootstrap.css" rel="stylesheet">
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
	    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
		<script src="../js/bootstrap.js" type="text/javascript" ></script>
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
          <a class="navbar-brand" href="../index.php">DAVV Tube</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../index.php"  >Videos</b></a>
			<!--<ul class="dropdown-menu">
			<li><a href="upload_form.html">Upload Video</a></li>
            <li><a href="http://127.0.0.1/My_davv_tube/admin_davv_tube/manage_video/manage_video.php">Manage Video</a></li>
			<li><a href="upload_form.html">Browse Video</a></li> 
            </ul>-->
			</li>
			<li><a href="../VerifyUser/verification.php">Verification</a></li>
			 <li class="dropdown"><a href="../index.php" class="dropdown-toggle" data-toggle="dropdown">Verify Blog<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="forum/verify_post.php">Post</a></li>
			<li><a href="forum/verify_reply.php">Reply</a></li>
</ul>
			</li>
			<li><a href="../analytics.php">Analytics</a></li>
            <li><a href="../index.php">Sign out</a>
			<!--<ul class="dropdown-menu">
			<li><a href="#">Change Password</a></li>
            </ul>-->
			</li>
          </ul>
        </div>
			
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
	<br>
	<br>
	<br>
	<br>
	<center>
	<div style="margin:10px">
	<?php echo $out?>
	</div>
	</center>
</body>
</html>
<?php }
else {
header ("location:../../admin_login.php");
}
?>
