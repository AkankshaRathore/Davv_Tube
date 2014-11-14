<?php
include('header.php');

?>
 <div class="container">
    <ul>
	<?php
	    if(isset($_GET['category']))
		{
		
	  $category=$_GET['category'];
	  }
	  else
	  {
	  $category='Computer_Science';
	  }
	  $result = mysqli_query($con,"SELECT * FROM video_list WHERE category='$category'");
	?>
      <div class="row margin-bottom-20">
        <div class="col-md-12 center">
          <h3>All videos related to <?php echo $category;?> ...</h3>
        </div><!-- end col -->
      </div><!-- end row -->
     <!-- <div class="row row-tiles">-->
	 
	  <?php $i=1;
	  while($row = mysqli_fetch_array($result))
  { 
  $id=$row['video_id'];
  $name=$row['file_name'];
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
              
              <p><?php echo " <a href='watch_videojs.php?id=$id'>$name</a><br/>"; ?> </p>
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
	<div class="container"></div>
     
<?php


include('footer.php');
?>  