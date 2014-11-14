<?php include('header.php');
?>
<script>
/* Script written by Adam Khoury @ DevelopPHP.com */
/* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file1").files[0];
	var vtitle=_("title").value;
	var vinstructor=_("instructor").value;
	var vdescription=_("description").value;
	var vtags=_("tags").value;
	var vduration=_("duration").value;
	var vcategory=_("category").value;
	//alert(file.name+" | "+file.size+" | "+file.type);
	alert(vtitle+" | "+vinstructor+" | "+vdescription+" | "+vtags+" | "+vduration+" | "+vcategory);
	var msg="";
	var flag = true; 
	if(file=="" || file==null)
	 {msg="\n Please choose a video.";
	 flag=false;
	 }
	 if(vtitle=="" || vtitle==null)
	 {msg+="\n Enter video title!";
	 flag=false;
	 }
	 if(vinstructor=="" || vinstructor==null)
	 {msg+="\n Enter Instructor or institute name.";
	 flag=false;
	 }
	 if(vduration=="" || vduration==null)
	 {msg+="\n Enter duration of video.";
	 flag=false;
	 }
	 if(vcategory=="" || vcategory==null)
	 {msg+="\n Please select video category!";
	 flag=false;
	 }
	 if (flag ==false) 
	{
	alert(msg);
	return false;
	}
	 
	if(flag){
	var formdata = new FormData();
	formdata.append("file1", file);
	formdata.append("title", vtitle);
	formdata.append("instructor", vinstructor);
	formdata.append("description", vdescription);
	formdata.append("tags", vtags);
	formdata.append("duration", vduration);
	formdata.append("category", vcategory);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "file_upload_parser.php");
	ajax.send(formdata);
	}
	else{
	
	alert("Enter form details properly!!");
	}
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
</script>

<div class="container" data-bind="load: loadData()">
		<!--<p>Please select a video file from your local computer and click "Upload". The server side script (PHP) will have Video Encoder for convert the video file to Flash Video format (*.flv) instantly. Uploading usually takes a few minutes per MB on a high-speed connection, please do not close your browser during uploading.

		To reduce the server load, we have limited the maximum file size to 20 MB. 
</p>-->
		<h3><u>Upload Video :</u><h3>
	  <div class="row">
		<div class="col-md-4">
		
		<form id="upload_form" enctype="multipart/form-data" method="post">
  <font size="4pt"><input type="file" name="file1" id="file1"></font><br>
  <h4>Video Title </h4>
		  <input type="text" data-bind="value:title, hasfocus: v_name_focus()" id="title" name="v_title" class="form-control inputWidth" placeholder="Enter the Video Title" /><br>
  <h4>Video by :Instructor Name </h4>
		  <input type="text" data-bind="value:instructor" id="instructor" name="v_Instructor_Name" class="form-control required" placeholder="Instructor Name" /><br>
  <h4> Video Description </h4>
		  <input type="text" data-bind="value:description" id="description" name="v_description" class="form-control required" placeholder="Description" /><br>
 
  <h4> Video Associated tags </h4>
		  <input type="text" data-bind="value:tags" id="tags" name="v_tags" class="form-control required" placeholder="tags ex. #AI #C #java" /><br>
		  
    <h4> Video Duration </h4>
		  <input type="text" data-bind="value:duration" id="duration" name="v_duration" class="form-control required" placeholder="video duration ex. 4:56 or 1:20:05" /><br>
		  
	<h4> Video Category </h4>
		 
		 <select data-bind="value:category" id="category" name="v_category" title="Select the category" placeholder="choose category" class="form-control required"> 
		              <option value="General">General</option>
 					  <option value="Computer_Science">Computer Science</option> 
					  
					  <option value="Management">Management</option>
					  <option value="Commerce">Commerce</option> 
					   <option value="Civil Engg">Civil Engg</option> 
					    <option value="Electrical">Electrical Engg</option> 
						 <option value="Mechanical">Mechanical Engg</option> 
						  <option value="EC">Electronics & Communication Engg</option>
					   <option value="Law">Law</option> 
					   <option value="Biochemistry">Biochemistry</option>
					 <option value="Biotechnology">Biotechnology</option>
					 <option value="Chemistry">Chemistry</option>
					 <option value="Economics">Economics</option>
					 <option value="Energy">Energy and Environment</option>
					 <option value="Future_studies">Future Studies and planning</option>
					 <option value="Instrumentation">Instrumentation</option>
					 <option value="Journalism">Journalism and Mass communication</option>
					 <option value="Life_Sciences">Life sciences</option>
					 <option value="Mathematics">Mathematics</option>
					 <option value="Physics">Physics</option>
					 <option value="Biology">Biology</option>
					 <option value="Statistics">Statistics</option>
					  <option value="Multimedia">Multimedia</option>
					  
					  </select>
		 
		 <br>	 
        <br>
		
  
  <input type="button"  value="Upload File" class="btn btn-md btn-primary" onclick="uploadFile()">
 
  
  <button class="btn btn-md btn-primary" type="reset" name="Reset">Reset</button>
   <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
</form>
		</div>
	  </div>
	</div>
	<?php 
include('footer.php');
?>   