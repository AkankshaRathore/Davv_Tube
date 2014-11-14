<?php
include('header.php');

if(!isset($_POST['category'])){
 header("Location:index.php");
}

if(isset($_GET['category']))
{
  $id = $_GET['category'];
  $result = mysqli_query($con,"SELECT * FROM video_list WHERE category LIKE '%".$_POST['category']."%'");
while($row = mysqli_fetch_array($result))
  {
       $name=$row['file_name'];
	   $tags=$row['tags'];
	   $description=$row['description'];
	   $title=$row['title'];
	   $category=$row['category'];
	  // $url=$row['url'];
  }
 //echo "<br>You are watching :".$name;
// echo "<br><embed src='$url' width='560' height='315'></embed>'";




?>
<style>
.description
{
border:2px solid #a1a1a1;
padding:10px 40px; 
background:#dddddd;
width:80%;
border-radius:20px;

}

</style>
 <!--------------video------------------>
	<div class="container-wrapper">
      <div class="container">
	    <br>
		<center>
		<h3>You are watching :<?php echo $name; ?> </h3>
	    <br>
		<div class="videoWrapper">
<div class="easyhtml5video" style="position:relative;">
<video id="example_video_1" controls="controls"  autoplay="autoplay" poster="uploaded/<?php echo $name; ?>.jpg" >
<source src="uploaded/<?php echo $name; ?>.m4v" type="video/mp4" />
<source src="uploaded/<?php echo $name; ?>.webm" type="video/webm" />
<source src="uploaded/<?php echo $name; ?>.ogv" type="video/ogg" />
<source src="uploaded/<?php echo $name; ?>.mp4"  />
<object type="application/x-shockwave-flash" data="uploaded/flashfox.swf" width="640" height="264" style="position:relative;">
<param name="movie" value="uploaded/flashfox.swf" />
<param name="allowFullScreen" value="true" />
<param name="flashVars" value="autoplay=true&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=false&amp;poster=uploaded/<?php echo $name; ?>.jpg&amp;src=uploaded/<?php echo $name; ?>.m4v" />
 <embed src="uploaded/flashfox.swf" width="640" height="264" style="position:relative;"  flashVars="autoplay=true&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=false&amp;poster=uploaded/<?php echo $name; ?>.jpg&amp;src=uploaded/<?php echo $name; ?>.m4v"	allowFullScreen="true" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_en" />
<img alt="<?php echo $name; ?>" src="uploaded/<?php echo $name; ?>.jpg" style="position:absolute;left:0;" width="100%" title="Video playback is not supported by your browser" />
</object>
</video>
   
<div class="description">

<h2><b><?php echo $title; ?></b></h2>
<p>Video description:<span><?php echo $description; ?><span> </p><br>
<h6><b>Category:</b><?php echo $category; ?></h6>
<p><b>Tags:</b><?php echo $tags; ?></p>
</div>
</center>
</div>
</div>
<script src="uploaded/html5ext.js" type="text/javascript"></script>

        
    

      </div><!-- end container -->
    </div><!-- end container-wrapper -->
	
	<?php 
	
	
	
	
	}
else
{
  echo "Error!";
}
	
	?>
	<!--------------/video------------------>
    
    
    <div class="clear"></div>
     
<?php
mysqli_close($con);

include('footer.php');
?>  