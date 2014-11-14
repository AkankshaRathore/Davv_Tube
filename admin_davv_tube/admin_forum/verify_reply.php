<?php
session_start();
if(isset($_SESSION['aid'])) {


include("connection.php");
$reply = "SELECT * FROM forum_answer WHERE a_status = 0";
$result=mysql_query($reply);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Verify Blog</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<style>
		.name {
		  width: 218px;
		}
		.inputWidth{
			width:270px;
		}
     
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
          <a class="navbar-brand" href="../index.php">DAVV Tube</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Videos<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="../upload_video.php">Upload Video</a></li>
            <li><a href="../manage_video/manage_video.php">Manage Video</a></li>
			<!--------------update here set template path-------------------->
			<li><a href="http://127.0.0.1/My_davv_tube/try_DAVV_tube_template/index.php">Browse Video</a></li>
			<!--------------/update here set template path-------------------->
            </ul>
			</li>
			<li class="dropdown"><a href="../index.php" class="dropdown-toggle" data-toggle="dropdown">User Verification<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="<?php echo $set_path; ?>VerifyUser/verification.php">Student</a></li>
			<li><a href="<?php echo $set_path; ?>VerifyUser/faculty_verification.php">Faculty</a></li>
			</ul>
			</li>
			 <li class="dropdown"><a href="../index.php" class="dropdown-toggle" data-toggle="dropdown">Verify Blog<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="verify_post.php">Post</a></li>
			<li><a href="verify_reply.php">Reply</a></li>
            </ul>
			</li>
			<li><a href="../analytics.php">Analytics</a></li>
           <li><a href="../admin_logout.php">Sign Out</a></li>

			
			</li>
          </ul>
        </div>
			
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

	 <div class="container" data-bind="load: loadData()">
		<br><br><h3>Blog Verification</h3><br><br>
	  <div class="row">
	    <div class="col-md-4">
		<form method="post">
		  <table data-bind="visible: people().length > 0" class="table table-bordered table-hover table-striped tablesorter" align="center">
			  <thead>
				  <tr> 
				      <!--s.no==ID-->
					  <th>S.No.<i class="fa fa-sort"></i></th>
					   <th>Name<i class="fa fa-sort"></i></th>
					   <th>Email<i class="fa fa-sort"></i></th>
					   <th>Reply<i class="fa fa-sort"></i></th>
					   <th>Date & Time<i class="fa fa-sort"></i></th>
					  <th>Click to allow<i class="fa fa-sort"></i></th>
					  <th>Click to deny<i class="fa fa-sort"></i></th>
				  </tr>
			  </thead>
			  <tbody>
			  <?php
 
// Start looping table row
while($rows=mysql_fetch_array($result)){
?>

                <tbody>
                  <tr class="active">
                    <td align="center" bgcolor="#FFFFFF"><?php echo $rows['a_id']; ?></td>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $rows['a_name']; ?></td>
					<td align="center" bgcolor="#FFFFFF"><?php echo $rows['a_email']; ?></td>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $rows['a_answer']; ?></td>
					<td align="center" bgcolor="#FFFFFF"><?php echo $rows['a_datetime']; ?></td>
					<td><a href="allow_reply.php?idd=<?php echo $rows['a_id']; ?>">Allow</a></td>
					<td><a href="deny_reply.php?idd=<?php echo $rows['a_id']; ?>">Deny</a> </td>
				
                  </tr>

				  <?php
// Exit looping and close connection 
}
//mysql_close(); // commented By Komal Rathore
?>			  </tbody>
		  </table>
		  </form>
		
	  </div>
	</div>
	
 <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>
<?php }
else {
header ("location:../../admin_login.php");
}
?>
