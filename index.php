<?php include('header.php');
include('analytics.php')?>
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
      poster="thumbnail.jpg"
      data-setup="{}">
					<source src="dt.mp4" type='video/mp4' />
					<source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
					<source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
					<track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
			 		<track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
			        <object type="application/x-shockwave-flash" data="try_DAVV_tube_template/uploaded/flashfox.swf" width="640" height="264" style="position:relative;">
						<param name="movie" value="try_DAVV_tube_template/uploaded/flashfox.swf" />
						<param name="allowFullScreen" value="true" />
						<param name="flashVars" value="autoplay=true&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=false&amp;poster=try_DAVV_tube_template/uploaded/Las_Ketchup_-_Asereje.jpg&amp;src=Las_Ketchup_-_Asereje.m4v" />
						<embed src="try_DAVV_tube_template/uploaded/flashfox.swf" width="640" height="264" style="position:relative;"  flashVars="autoplay=true&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=false&amp;poster=try_DAVV_tube_template/uploaded/Las_Ketchup_-_Asereje.jpg&amp;src=Las_Ketchup_-_Asereje.m4v"	allowFullScreen="true" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_en" />
						<img alt="Las Ketchup - Asereje" src="try_DAVV_tube_template/uploaded/Las_Ketchup_-_Asereje.jpg" style="position:absolute;left:0;" width="100%" title="Video playback is not supported by your browser" />
					</object>
			
			
			</video>
		</div>
        </center>   
    

      </div><!-- end container -->
    </div><!-- end container-wrapper -->
	<!--------------/video------------------>
    
    
    <div class="clear"></div>
    
    
    
   
      
    
    
 
	
    
    
  </div>
<div class="clear"></div>
    
   <?php include('footer.php');?>