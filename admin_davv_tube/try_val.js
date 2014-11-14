function validate(){
var file = _("file1").files[0];
	var vtitle=_("title").value;
	var vinstructor=_("instructor").value;
	var vdescription=_("description").value;
	var vtags=_("tags").value;
	var vduration=_("duration").value;
	var vcategory=_("category").value;
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
	else 
	return true;


}
function uploadFile(){
	
	//alert(file.name+" | "+file.size+" | "+file.type);
	var a=return validate();
	if(a){
	alert("reached");
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
