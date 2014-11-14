<?php
include('config.php');

$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
$name=preg_replace("/\.[^$]*/","",$fileName);
$ext = pathinfo($fileName, PATHINFO_EXTENSION);
$video_title=$_POST['title'];
$video_instructor=$_POST['instructor'];
$video_description=$_POST['description'];
$video_tags=$_POST['tags'];
$video_duration=$_POST['duration'];
$video_category=$_POST['category'];
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
else{

             echo "Complete File Name is:".$fileName."<br>";
			 
			 echo "Type is".$fileType."<br>";
			 echo "Size is".$fileSize."<br>";
			 echo "File Name is:".$name."<br>";
			 echo "extension is :".$ext."<br>";
             echo "video title is :".$video_title."<br>";
			  echo "video instructor is :".$video_instructor."<br>";
			   echo "video description is :".$video_description."<br>";
			    echo "video tags  :".$video_tags."<br>";
				 echo "video duration is :".$video_duration."<br>";
				  echo "video category is :".$video_category."<br>";

				if(move_uploaded_file($fileTmpLoc, "../try_DAVV_tube_template/uploaded/$fileName")){
							echo "$fileName upload is complete";
				} 
				else {
							echo "move_uploaded_file function failed";
					 }

					 
					 
//$url="http://127.0.0.1/My_davv_tube/DAVV_tube_template/uploaded/$fileName";
 //echo "<br>".$url."<br>";
 
 //mysqli_query($con,"INSERT INTO test_videos (name,url)VALUES ('$fileName', '$url')");

mysqli_query($con,"INSERT INTO video_list (instructor_name,category,title,description,tags,date_created,duration,original_name,file_name)VALUES ('$video_instructor','$video_category','$video_title','$video_description','$video_tags',NOW(),'$video_duration','$fileName','$name')");
echo"<br> Reached";
//mysqli_query($con,"INSERT INTO all_video_types (file_name,video_type,extension) VALUES ('$name','$fileType','$ext')");

}
mysqli_close($con);

?>