<?php
include('header.php');
 ?>
 
 <div class="clear"></div> 
   
   <div class="container" data-bind="load: loadData()">
		<br><br>
		<h3>If you forgot Password fill the form below ,your new password will be emailed to you!<h3><br>
	  <div class="row">
		<div class="col-md-4">
		<form action="password_change.php" method="post">
		
		  <h4>Email id</h4>
		  <input type="text" data-bind="value:uname, hasfocus: username_focus()" name="email" class="form-control inputWidth" placeholder="Enter your email" />
		  	  
		  <br><button class="btn btn-md btn-primary" type="submit">Submit</button>  
		  
		  
		</form>
		</div>
	  </div>
	</div>
<!-- /.container -->

 
 
<?php include('footer.php');?>