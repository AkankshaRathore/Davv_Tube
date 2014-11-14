<?php
include("../../commonVar.php");
session_start();
if(isset($_SESSION['aid'])) {

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Verify</title>
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
			<li><a href="<?php echo $host.$folderName;?>/try_DAVV_tube_template/index.php">Browse Video</a></li>
			<!--------------/update here set template path-------------------->
            </ul>
			</li> 
             <li class="dropdown"><a href="../index.php" class="dropdown-toggle" data-toggle="dropdown">User Verification<b class="caret"></b></a>
             <ul class="dropdown-menu">
			<li><a href="verification.php">Student</a></li>
                         <li><a href="faculty_verification.php">Faculty</a></li>
               </ul>
	    </li>
			<li class="dropdown"><a href="../index.php" class="dropdown-toggle" data-toggle="dropdown">Verify Blog<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="../admin_forum/verify_post.php">Post</a></li>
			<li><a href="../admin_forum/verify_reply.php">Reply</a></li>
			<!--<li><a href="#">Approve Comments</a></li>-->
            </ul>
			</li>
			<li><a href="../analytics.php">Analytics</a></li>
            <li><a href="../admin_logout.php" >Sign out</a>
			
			</li>
          </ul>
        </div>
			
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

	 <div class="container" data-bind="load: loadData()">
		<br><br><h3>User Verification</h3><br><br>
	  <div class="row">
	    <div class="col-md-4">
		
		<!--<form name="InputId" action="info.php" method="post">
		<input name="id" type="number" size=10 maxlength="1" class="form-control inputWidth" placeholder="enter Id"/>-->
		<!--
		  <input  type="text" data-bind="value: person_name, hasfocus: person_name_focus()" class="form-control inputWidth" placeholder="Name" >
		  <br><input type="text" data-bind="value: person_age" class="form-control inputWidth" placeholder="Enter Age"><br>

		  <button data-bind="click: createPerson" class="btn btn-md btn-primary">Create</button> <br><br>       
-->
          <!-- <input type="submit" value="NOtify User for Allow">-->
		  <table data-bind="visible: people().length > 0" class="table" align="center">
			  <thead>
				  <tr> <th>ID</th>
					  <th>First Name</th>
					   <th>Last Name</th>
					   <th>University Seniority number</th>
					   <th>Department</th>
					   <th>Designation</th>
					   <th>Status</th>
					  <!--<th>email</th>-->
					  <!--<th>status</th>-->
					  <th>click to verify</th>
				  </tr>
			  </thead>
			  <tbody data-bind="foreach: people">
				  <tr><td>
						  <span  data-bind="text: id"></span>
						  
						 
					  </td>
					  <td>
						  <span data-bind="text: name"></span>
						 
					  </td>
					   <td>
						  <span data-bind="text: lname"></span>
						 
					  </td>
					  					   <td>
						  <span data-bind="text: sen_no"></span>
						 
					  </td>
					  					   <td>
						  <span data-bind="text: dept"></span>
						 
					  </td>
					  					   <td>
						  <span data-bind="text: designation"></span>
						 
					  </td>
					  					   <td>
						  <span data-bind="text: status"></span>
						 
					  </td>
					  				<!--	   <td>
						  <span data-bind="text: sem"></span>
						 
					  </td>
					  <td>  <a data-bind="attr:{href:age}">  view Document</a>-->
				<!--	 <a data-bind="attr:{href:age}">     <img data-bind="attr: {src: age}"/>view image</a>-->
						 <!-- <span data-bind="text: age, click: ageUpdating, visible: !ageUpdate()"></span>
						  <input type="text" class="age" data-bind="value: age, visible: ageUpdate, hasfocus: ageUpdate">
					  </td>-->
					  <!-- <td>
						  <span data-bind="text: email"></span>
						  <input type="hidden" data-bind="value: email" name="Email"/>
					  </td>
					  
					   <td>
						  <span data-bind="text: status"></span>
						 
					  </td>-->
					<!--  <td>
					   <button  class="btn btn-md btn-primary">Notify</button>  
					  </td>
					  -->
				 <td><a href="#"> <button data-bind="click: $root.removePerson" class="btn btn-md btn-primary">Allow</button> </a></td>
				  <td><a href="#"> <button data-bind="click: $root.denyPerson" class="btn btn-md btn-primary">Deny</button> </a></td>
					  
				  </tr>
			  </tbody>
		  </table> 
		 
		<!--</form>-->
		
	  </div>
	</div>

	<div id=result></div>
	<script src="js/knockout-2.3.0.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script>
		
		var personModel = function(id, name, lname,email,status,dept,designation,sen_no){
			var self = this; //caching so that it can be accessed later in a different context
			  this.id = ko.observable(id); //unique id for the student (auto increment primary key from the database)
			  this.name = ko.observable(name); //name of the student
			  this.lname = ko.observable(lname);
               this.email=ko.observable(email);
			   this.status=ko.observable(status);
			    this.dept=ko.observable(dept);
				 this.designation=ko.observable(designation);
				  this.sen_no=ko.observable(sen_no);
				  
			  this.nameUpdate = ko.observable(false); //if the name is currently updated
			  this.ageUpdate = ko.observable(false); //if the age is currently updated

			  //executed if the user clicks on the span for the student name
			  this.nameUpdating = function(){
				  self.nameUpdate(true); //make nameUpdate equal to true
			  };
			  
			  //executed if the user clicks on the span for the student age
			  this.ageUpdating = function(){
				  self.ageUpdate(true); //make ageUpdate equal to true
			  };
		};
		
		var model = function(){
			var self = this; //cache the current context
			this.person_name = ko.observable(""); //default value for the student name
			this.person_age = ko.observable("");
			this.person_name_focus = ko.observable(true); //if the student name text field has focus
			this.people = ko.observableArray([]); //this will store all the students
			
			      
			this.createPerson = function(){
			  if(self.validatePerson()){ //if the validation succeeded
			  
				  //build the data to be submitted to the server
				  var person = {'name' : this.person_name(), 'age' : this.person_age()};
				  
				  //submit the data to the server        
				  $.ajax(
					  {
						  url: 'refresher_save.php',
						  type: 'POST',
						  data: {'student' : person, 'action' : 'insert'},
						  success: function(id){//id is returned from the server
						  
							  //push a new record to the student array
							  self.people.push(new personModel(id, self.person_name(), self.person_age()));
							  
							  self.person_name(""); //empty the text field for the student name
							  self.person_age("");
						  }
					  }
				  );           
				  
			  }else{ //if the validation fails
				  alert("Name and age are required and age should be a number!");
			  }
			};
			
			this.validatePerson = function(){
			  if(self.person_name() !== "" && self.person_age() != "" && Number(self.person_age()) + 0 == self.person_age()){
				  return true;
			  }
			  return false;
			};
			
			this.loadData = function(){

			  //fetch existing student data from database
			 $.ajax({
				  url : 'faculty_data.php',
				  dataType: 'json',
				  success: function(data){ //json string of the student records returned from the server
					  
					  for(var x in data){

						  //student details
						  var id = data[x]['id'];
						  var name = data[x]['name'];
						  var lname = data[x]['lname'];
						  var email=data[x]['email'];
						  var status=data[x]['status'];
						  var dept=data[x]['dept'];
						  var designation=data[x]['designation'];
						  var sen_no=data[x]['sen_no'];
						 

						  //push each of the student record to the observable array for 
						  //storing student data
						  
						  self.people.push(new personModel(id, name, lname,email,status,dept,designation,sen_no));
					  }
					  
				  }
			  });  

			};
			
			
			this.denyPerson = function(person){
              var id=person.id();
			    $.post(
				    'faculty_info.php',
				    {'action':'deny','id' :id},
				    function(response){
					  
					    //remove the currently selected student from the array
					    self.people.remove(person);
						alert("Notification is  send Successfully for deny");
				  }
			    );
			};
			this.removePerson = function(person){
              alert(person.email());
			    $.post(
				    'faculty_info.php',
				    {'action':'allow','id' : person.id(),'Email': person.email()},
				    function(response){
					  
					    //remove the currently selected student from the array
					    self.people.remove(person);
						//alert(response);
						alert("Notification is send Successfully for allow");
				  }
			    );
			};
			this.checkUniqueEmail = function(person){
              alert(person.email());
			    $.post(
				    'info.php',
				    {'action':'check','id' : person.id(),'Email': person.email()},
				    function(response){
					  / alert(response);
					    //remove the currently selected student from the array
					    self.people.remove(person);
						alert("Notification is send Successfully for allow");
				  }
			    );
			};
			
			this.updatePerson = function(person){
			  //get the student details
			  var id = person.id();
			  var name = person.name();
			  var age = person.age();

			  //build the data
			  var student = {'id' : id,'action' : 'deny'};
			  
			  //submit to server via POST
			  $.post(
				  'info.php',
				  {'action' : 'update', 'student' : student}
			  );
			};


		};
		
		ko.applyBindings(new model());
		
		function editDocument(){
          var edit_id = document.getElementById("result").val();
		  //alert(edit_id);
        $.ajax({
        type: 'POST',
        url: 'info.php',
        data: {edit_id: $("#result").val()},
        success: function(html){
          $('#result').html(response);
        }
     });
}
	</script>
 <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>
<?php }
else {
header ("location:../../admin_login.php");
}
?>
