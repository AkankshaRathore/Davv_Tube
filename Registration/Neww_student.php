<?php include("../commonVar.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Student Registration</title>
<!-- Date Picker for DOB -->

<!-- end Date Picker-->

 <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <style>
	body {margin-top: 60px;}
    </style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="form_validate.js"></script>
	<!----------------header of try_davv_tube--------------------------------------->
	 <script>
  <!-- Chang URLs to wherever Video.js files will be hosted -->
  <link href="<?php echo $host.$folderName;?>/try_DAVV_tube_template/video-js.css" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->
  <script src="<?php echo $host.$folderName;?>/try_DAVV_tube_template/video.js">
  </script>

  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  <script>
    videojs.options.flash.swf = "<?php echo $host.$folderName;?>try_DAVV_tube_template/video-js.swf";
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo $host.$folderName;?>/try_DAVV_tube_template/css/bootstrap.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!--[if IE 7]>
      <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo $host.$folderName;?>/try_DAVV_tube_template/css/style.css" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $host.$folderName;?>/try_DAVV_tube_template/img/sample/dt5.gif">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $host.$folderName;?>/try_DAVV_tube_template/img/sample/dt4.gif">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $host.$folderName;?>/try_DAVV_tube_template/img/sample/dt3.gif">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo $host.$folderName;?>/try_DAVV_tube_template/img/sample/dt2.gif">
                                   <link rel="shortcut icon" href="<?php echo $host.$folderName;?>/try_DAVV_tube_template/img/sample/dt1.gif">
	<!---------------------------/header of davv tube------------------------------->
	<script type="text/javascript">
function ValidateFileUpload() {
        var fuData = document.getElementById('file');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an image");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");

            }
        }
    }
	function validate()
	{
	var fname=document.forms["reg"]["f_name"].value;
	var lname=document.forms["reg"]["l_name"].value;
	 var roll=document.forms["reg"]["roll_no"].value;
	 var enroll=document.forms["reg"]["enroll_no"].value;
	 var docs=document.forms["reg"]["file"].value;
	 var gender=document.forms["reg"]["Gender"].value;
	 var dept=document.forms["reg"]["category"].value;
	 var dob=document.forms["reg"]["dob"].value;
	 var email=document.forms["reg"]["Email"].value;
	 var msg="";
	 var flag = true; 
	 if(fname=="" || fname==null)
	 {msg="\n First name must be enter";
	 flag=false;
	 }
	 if(lname=="" || lname==null)
	 {msg+="\n Last name must be enter";
	 flag=false;
	 }
	 if(roll=="" || roll==null)
	 {msg+="\n Roll number must be enter";
	 flag=false;
	 }
	 if(enroll=="" || enroll==null)
	 {msg+="\n Enrollment number must be enter";
	 flag=false;
	 }
	 if(docs=="" || docs==null)
	 {msg+="\n Please select the document";
	 flag=false;
	 }
	 /*if(gender=="" || gender==null)
	 {msg+="\n Gender must be enter";
	 flag=false;
	 }
	 if(dept=="" || fname==null)
	 {msg+="\n Department must be selected";
	 flag=false;
	 }*/
	 if(dob=="" || dob==null)
	 {msg+="\n DOB must be enter";
	 }
	 if(email=="" || email==null)
	 {msg+="\n Email must be enter";
	 flag=false;
	 }
	 
	if (flag ==false) 
	{
	alert(msg);
	return false;
	}
	else 
	return true;
	}
/*function to load department list*/
function loadlist(selobj,url,nameattr)
{
    $(selobj).empty();
    $.getJSON(url,{},function(data)
    {
        $.each(data, function(i,obj)
        {
            $(selobj).append($('<option></option>').val(obj[nameattr]).html(obj[nameattr]));
        });
    });
}

$(function()
{ 
   loadlist($('select#country').get(0), 'get-list.php?getlist=country','country');
   loadlist($('select#category').get(0), 'get-list.php?getlist=category','dept_name');
});
 /*$(document).ready(function () {
$('#category option:selected').change(function(event) {
        $.get('ShowCategory.php', { selected: $('#category option:selected').val() },
            function(data) {
                $('#txtHint').html(data);
            }
        );
    });
 });*/
$('#category').change(function() {
  $('#txtHint').html($('#category').val());
})
</script>
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
              <a class="brand" href="<?php echo $host.$folderName;?>/index.php"><span class="dtlogo"></span> &nbsp;&nbsp;DAVV-Tube</a>
              <div class="navbar-collapse collapse">
                <div class="nav-menu pull-left">
                  <ul class="nav nav-pills">
                    <li><a href="<?php echo $host.$folderName;?>/about_davv.php">About DAVV_tube</a></li>
                   <!-- <li><a href="portfolio-parent.html">Portfolio</a></li>
                    <li><a href="blog-parent.html">Blog</a></li>-->
                    <li class="dropdown">
                      <a href="#none" class="dropdown-toggle" data-toggle="dropdown"><b>Sign Up</b> <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <!--<li class="nav-header"></li>-->
                        <li><a href="<?php echo $host.$folderName;?>/Registration/Neww_student.php">Student</a></li>
                        <li><a href="<?php echo $host.$folderName;?>/Registration/faculty.php">Faculty</a></li>
                       <!-- <li><a href="http://127.0.0.1/My_davv_tube/try_DAVV_tube_template/category.php?category="Commerce"">Commerce</a></li>
						 <li><a href="http://127.0.0.1/My_davv_tube/try_DAVV_tube_template/category.php?category="General"">General</a></li>
                        <li><a href="search.html">Search Results</a></li>
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
                   <!-- <li class="signup"><a href="http://www.daut.netai.net/Registration/try_DAVV_tube_template/search.php" class="btn btn-purple">Search</a></li>-->
                    <li class="login"><a href="<?php echo $host.$folderName;?>/login.php" class="btn btn-light">Login</a></li>
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
	<div class="container" data-bind="load: loadData()">
		
	  <div class="row">
	 		<div class="col-md-4 col-md-offset-3">
		<h2>Register as a Student :<h2>
		<!--form start-->

<form action="Student_register.php" name = "reg" method="post" enctype="multipart/form-data">

<h4>First Name*</h4><input  id="focusedInput" type="text" placeholder="Enter Your First Name" name="f_name" class="form-control inputWidth" />
<h4>Last Name*</h4>
		  <input type="text" name="l_name"  placeholder="Enter Your Last Name" title="Please Enter Your Name" class="form-control required">
		  <h4>Gender*</h4>
		  <input type="radio" value="M" name="Gender"><font size="2pt"> <b>Male</b></font>
		  <input type="radio" value="F" name="Gender"> <font size="2pt"> <b>Female</b></font>
		  
		  
		  
		   <!--/input-group-->
		  
		  <h4>Date of birth*</h4>
		  <input type="text" name="dob" placeholder="DD/MM/YYYY" class="form-control required" title="Please Enter Your Date of Birth">
		  <h4>Email*</h4>
		 <input type="email" name="Email" placeholder="Enter Your Email-id"  class="form-control required" title="Please Enter Your Email-id">
		  <!--<h4>Department</h4>
		  <h1>Dynamically loaded list Sample</h1>
Country:<select name='country' id='country' size='1'></select>-->

<h4>Department:*</h4><select name='category' id='category' placeholder="Enter Your Department" value=1 class="form-control required" size='1' onchange="return Selected('category')"></select>
          <!-- <div name="dept" id="textHint"></div>
		  <input type="text" name="dept_name" placeholder="Enter Your Department"  class="form-control required" title="Please Enter Your Department">
		  -->
		  <h4>Course*</h4>
		  <input type="text" name="course" placeholder="Enter Your course"  class="form-control required" title="Please Enter Your Course">
		  <h4>Semester*</h4>
		  <input type="text"  name="sem" placeholder="Enter Your Semester" class="form-control required"  title="Please Enter Your Semester">
		  <h4>Enrollment Number*</h4>
		  <input type="text"  name="enroll_no" placeholder="Enter Your Enrollment Number" class="form-control required"  title="Please Enter Your Enrollment Number">
		  <h4>Roll Number*</h4>
		  <input type="text"  name="roll_no" placeholder="Enter Your Roll Number"  class="form-control required" title="Please Enter Your Roll Number">
		  <br> <h4><b> Scan and upload your college ID card:*</b></h4><img src="images/noimg.jpg" id="blah">
		  <font size="4pt"><input type="file" name="file" id="file" onchange="return ValidateFileUpload()"></font><br>

<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
<input type="text" name="captcha_code" size="10" maxlength="6" />
<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false"><span><font size="5pt"><b><u>Change Image</u><b></font><span></a>
<br><br>
<input type="submit" value="submit" name="submit" class="btn btn-md btn-primary" onclick="return validate()">
</form>
<!--form end-->

		</div>
	  </div>
	</div>
	 <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script type="text/javascript">

	function Selected(o)
	{
	/*alert(o);*/
	var b=document.getElementById(o).selectedIndex;
	/*alert(b);*/
	var sstr=document.getElementById(o).options[b].text;
	/*alert(sstr);*/
	document.getElementById('textHint').innerHTML=sstr;
	return b;
	}
	</script>
	 <script src="<?php echo $host.$folderName;?>/try_DAVV_tube_template/js/jquery.min.js"></script>
    <script src="<?php echo $host.$folderName;?>/try_DAVV_tube_template/js/bootstrap.js"></script>
    <script src="<?php echo $host.$folderName;?>/try_DAVV_tube_template/js/dt.js"></script>
</body>
</html>
