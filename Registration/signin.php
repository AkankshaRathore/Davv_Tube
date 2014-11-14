<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Faculty Registration</title>

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
          <a class="navbar-brand" href="#">DAVV Tube</a>
        </div>
		
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign up<b class="caret"></b></a>
			<ul class="dropdown-menu">
				  				<li><a href="StudentRegistration.html">Student</a></li>
                    			<li><a href="FacultyRegistration.html">Faculty</a></li>
            </ul>
			</li>
            <li><a href="#services">Sign in</a></li>
            
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

   <div class="container" data-bind="load: loadData()">
		<h3><strong>Sign in :</strong><h3>
	  <div class="row">
	  
		<div class="col-md-4">
		<form class="form-horizontal" action="Submit_faculty_Registration.php" method="post" role="form">
		<div class="form-group">
		<h4>Username</h4>
		  <input type="text" data-bind="value: uname, hasfocus: u_name_focus()" name="uname" class="form-control inputWidth" placeholder="Enter User Name" />
		  </div>
		  <!--<h4><label>Last Name</label></h4>-->
		  <div class="form-group">
		  <h4>Password</h4>
		  <input type="password" data-bind="value: pass" name="pwd" placeholder="Enter Password" class="form-control required" title="Please Enter Your Password">
	</div>
	<div class="form-group">
    <div class="col-sm-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
		  <button data-bind="click: signin" class="btn btn-md btn-primary">Sign in</button>      
		</form>
		</div>
	  </div>
	</div>
<!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>