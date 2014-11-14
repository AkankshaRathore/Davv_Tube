<?php
include('header.php');

if(isset($_GET['id']))
{
  $id = $_GET['id'];
  $result = mysqli_query($con,"SELECT * FROM video_list WHERE video_id='$id'");
while($row = mysqli_fetch_array($result))
  {
       $name=$row['file_name'];
	   $tags=$row['tags'];
	   $description=$row['description'];
	   $title=$row['title'];
	   $category=$row['category'];
	   $view=$row['views']+1;
	   
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
  <!-- 
<div class="description">

<h2><b><?php echo $title; ?></b></h2>
<p>Video description:<span><?php echo $description; ?><span> </p><br>
<h6><b>Category:</b><?php echo $category; ?></h6>
<p><b>Tags:</b><?php echo $tags; ?></p>
</div>
-->
</center>
</div>
</div>

    <div class="container">
         
      
      
      <div class="row">
        <div class="col-md-12">
          <div class="well well-large testimonial">
            <div class="pull-left testimonial-image">
              <img src="img/sample/desc.jpg" alt="" />
            </div><!-- end testimonial -->
            <div class="pull-left testimonial-detail">
              <h2><b><?php echo $title; ?><b><h2>
              <p>Video Description:<?php echo $description; ?></p>
			 
			  <p><a href="#none"><?php echo $view; ?> &nbsp;views</a>
			  <h6><b>Category:</b><?php echo $category; ?></h6>
			  <p><b>Tags:</b><?php echo $tags; ?></p>
            </div><!-- end testimonial detail -->
          </div><!-- end well -->
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
<script src="uploaded/html5ext.js" type="text/javascript"></script>

        
    

      </div><!-- end container -->
    </div><!-- end container-wrapper -->
	
	<?php 
	
	
	
	
	}
else
{
  echo "Error!";
}
	mysqli_query($con,"UPDATE video_list SET views='$view'");
	?>
	<!--------------/video------------------>
    
    
    <div class="container">
    <ul>
	<?php
	
	 $result = mysqli_query($con,"SELECT * FROM video_list WHERE original_name LIKE '%.mp4'");
	?>
      <div class="row margin-bottom-20">
        <div class="col-md-12 center">
          <h2>Watch more...</h2>
        </div><!-- end col -->
      </div><!-- end row -->
     <!-- <div class="row row-tiles">-->
	 
	  <?php $i=1;
	  while($row = mysqli_fetch_array($result))
  { 
  
  $id=$row['video_id'];
  $name=$row['file_name'];
  //$url=$row['url'];
	  if($i==1 || $i==5)
	  {
	    echo "<div class=row row-tiles>";
		$i=1;
	  }
	  
	  ?>
        <div class="col-md-3">
          <div class="tile tile-alt">
		    <form id="<?php echo $id; ?>" method="POST"  action= "http://127.0.0.1/My_davv_tube/DAVV_tube_template/watch.php?id=<?php echo $id; ?>" >
            <input class="tile-photo"  type="submit" style="background-image:url(img/sample/Blank_Video_Thumbnail.jpg);background-position:center center;" value=""/>
            <div class="tile-details">
              
              <p><?php echo " <a href='watch.php?id=$id'>$name</a><br/>"; ?> </p>
             </form>
            </div><!-- end tile details -->
          </div><!-- end tile -->
        </div><!-- end col -->
        <?php 
		$i=$i+1;
		if($i==5)
		{
		echo "</div><!-- end row -->";
		}
		} 
		
     mysqli_close($con);
     ?>

		
       
      <!--</div><!-- end row -->
    </div><!-- end container -->
    
   
	
   
<?php
/*mysqli_close($con);*/

include('footer.php');
?>  