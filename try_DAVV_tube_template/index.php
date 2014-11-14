<?php
include('header.php');
?>
  
    
    <!--------------video------------------>
	<div class="container-wrapper">
      <div class="container">
	    <br>
		<br>
		<center>
		<h1>You are watching DAVV TUBE!</h1>
	    <br>
		<div class="videoWrapper">
			<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="640" height="264"
      poster="../thumbnail.jpg"
      data-setup="{}">
					<source src="../dt.mp4" type='video/mp4' />
					<source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
					<source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
					<!--<track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
			 		<!--<track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
			        <object type="application/x-shockwave-flash" data="uploaded/flashfox.swf" width="640" height="264" style="position:relative;">
						<param name="movie" value="uploaded/flashfox.swf" />
						<param name="allowFullScreen" value="true" />
						<param name="flashVars" value="autoplay=true&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=false&amp;poster=uploaded/Las_Ketchup_-_Asereje.jpg&amp;src=Las_Ketchup_-_Asereje.m4v" />
						<embed src="uploaded/flashfox.swf" width="640" height="264" style="position:relative;"  flashVars="autoplay=true&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=false&amp;poster=uploaded/Las_Ketchup_-_Asereje.jpg&amp;src=Las_Ketchup_-_Asereje.m4v"	allowFullScreen="true" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_en" />
						<img alt="Las Ketchup - Asereje" src="uploaded/Las_Ketchup_-_Asereje.jpg" style="position:absolute;left:0;" width="100%" title="Video playback is not supported by your browser" />
					</object>
			
			
			</video>
		</div>
        </center>   
    

      </div><!-- end container -->
    </div><!-- end container-wrapper -->
	<!--------------/video------------------>
    
    
    <div class="clear"></div>
    
    
    
   
      
    <div class="container">
    <ul>
	<?php
	  $result = mysqli_query($con,"SELECT * FROM video_list WHERE original_name LIKE '%.mp4'");
	?>
      <div class="row margin-bottom-20">
        <div class="col-md-12 center">
          <h2>Recent Uploads...</h2>
        </div><!-- end col -->
      </div><!-- end row -->
     <!-- <div class="row row-tiles">-->
	 
	  <?php $i=1;
	  while($row = mysqli_fetch_array($result))
  { 
  $id=$row['video_id'];
  $name=$row['file_name'];
  $title=$row['title'];
	  if($i==1 || $i==5)
	  {
	    echo "<div class=row row-tiles>";
		$i=1;
	  }
	  
	  ?>
        <div class="col-md-3">
          <div class="tile tile-alt">
		    <form id="<?php echo $id; ?>" method="POST"  action= "<?php echo $set_path;?>watch.php?id=<?php echo $id; ?>" >
            <input class="tile-photo"  type="submit" style="background-image:url(img/sample/Blank_Video_Thumbnail.jpg);background-position:center center;" value=""/>
            <div class="tile-details">
              
              <p><?php echo " <a href='watch.php?id=$id'>$title</a><br/>"; ?> </p>
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
    
   
    <div class="clear"></div>
	
    
    
    <?php
include('footer.php');
?>
    