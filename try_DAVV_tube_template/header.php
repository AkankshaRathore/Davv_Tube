<?php
session_start();
include("../commonVar.php");
$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$databaseName);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $set_path=$host.$folderName."/try_DAVV_tube_template/";
if(isset($_SESSION['username'])) {


?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <!----------------------video--------------------->
  <script>
  <!-- Chang URLs to wherever Video.js files will be hosted -->
  <link href="video-js.css" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->
  <script src="video.js"></script>

  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  <script>
    videojs.options.flash.swf = "video-js.swf";
  </script>
  <style>
  .mybox{
  -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box;         /* Opera/IE 8+ */
	}
  .videoWrapper video {
 max-width: 75% !important;
height: 40% !important;

}

#example_video_1{
    width:75% ;
    height:40% ;
}

  </style>
  <!------------------/video-------------------------->
 <style>
  
 </style>
    <meta charset="utf-8">
    <title>DAVV Tube</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!--[if IE 7]>
      <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/sample/dt5.gif">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/sample/dt4.gif">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/sample/dt3.gif">
                    <link rel="apple-touch-icon-precomposed" href="img/sample/dt2.gif">
                                   <link rel="shortcut icon" href="img/sample/dt1.gif">
    
  </head>
<body>
  
    <div class="navbar navbar-inverse navbar-fixed-top" id="navbar">
      <div class="navbar-inner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
              <a href="#none" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-reorder"></span>
                <span class="btn-navbar-text">Menu</span>
              </a>
              <a class="brand" href="index.php"><span class="dtlogo"></span> &nbsp;&nbsp;DAVV-Tube</a>
              <div class="navbar-collapse collapse">
                <div class="nav-menu pull-left">
                  <ul class="nav nav-pills">
                    <li><a href="<?php echo $set_path;?>about_davv.php">About DAVV_tube</a></li>
                   <!-- <li><a href="portfolio-parent.html">Portfolio</a></li>
                    <li><a href="blog-parent.html">Blog</a></li>-->
					<li><a href="<?php echo $set_path;?>user_forum/main_blog.php">Blog</a></li>
                    <li class="dropdown">
                      <a href="#none" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li class="nav-header">Video Categories</li>
                        <li><a href="<?php echo $set_path;?>ComputerScience.php?category=Computer_Science">Computer Science</a></li>
                        <li><a href="<?php echo $set_path;?>ComputerScience.php?category=Management">Management</a></li>
                        <li><a href="<?php echo $set_path;?>ComputerScience.php?category=Commerce">Commerce</a></li>
						 <li><a href="<?php echo $set_path;?>ComputerScience.php?category=General">General</a></li>
                        <!--<li><a href="search.html">Search Results</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">Blog Pages</li>
                        <li><a href="blog-archives.html">Archives</a></li>
                        <li><a href="blog-categories.html">Categories</a></li>
                        <li><a href="blog-tags.html">Tags</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">Components</li>
                        <li><a href="elements.html">UI Elements</a></li>
                        <li><a href="forms.html">Form Elements</a></li>
                        <li><a href="typography.html">Tables &amp; Typography</a></li>
                        <li><a href="faqs.html">FAQs</a></li>
						-->
                      </ul>
                    </li>
                  </ul>
                </div><!-- end nav-menu -->
                <div class="nav-user pull-right">
                  <ul class="nav nav-user-options">
                    <li class="signup"><a href="<?php echo $set_path;?>search.php" class="btn btn-purple">Search</a></li>
                    <li class="login"><a href="<?php echo $set_path;?>logout.php" class="btn btn-light">Sign Out</a></li>
					<!--<li>
						
						
					</li> --->
                  </ul>
                </div><!-- end nav-user -->
              </div><!-- end navbar-collapse -->
            </div><!-- end col-md-12 -->
          </div><!-- end row fluid -->
        </div><!-- end container -->
      </div><!-- end navbar-inner -->
    </div><!-- end navbar -->
   <div class="clear"></div> 
<?php }
else {
header ("location:../login.php");
}
?>
