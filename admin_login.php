<?php include('header.php');

?>
   <br><br>
   <div class="clear"></div> 
   
   <div class="container" data-bind="load: loadData()">
		
		<h3>Login :<h3>
	  <div class="row">
		<div class="col-md-4">
		<form action="admin_login_process.php" method="post">
		
		  <h4>Username</h4>
		  <input type="text" data-bind="value:uname, hasfocus: username_focus()" name="username" class="form-control inputWidth" placeholder="Enter your username" />
		  
		  <h4>Password</h4>
		  <input type="password" data-bind="value:pwd" name="password" placeholder="Enter your password" class="form-control required" >
		  
		  <br><button class="btn btn-md btn-primary" type="submit">Submit</button>  
		  <button class="btn btn-md btn-primary" type="reset" name="Reset">Reset</button><br>	
		  <font size="3pt"><a href="forgotpassword.php">Forgot password?</a></font><br>
		 <!-- <font size="3pt">If you are not registered please complete registration process by filling the appropriate Sign-Up form:
		  <ul>
		 <li> <a href="/<?php // echo $student_registration_form;?>">SIGN UP-student</a></li>
		 <li> <a href="#">SIGN UP-faculty</a></li>
		  </ul>-->
		  </font>
		</form>
		</div>
	  </div>
	</div>
<!-- /.container -->

   <?php 
   include('footer.php');
   ?>