<?php
include('header.php');


if(!isset($_POST['search'])){
 header("Location:index.php");
}


$result = mysqli_query($con,"SELECT * FROM test_videos WHERE name LIKE '%".$_POST['search']."%'");
 ?>

<div class="container">
    <ul>
	
	<div class="row margin-bottom-20">
        <div class="col-md-12 center">
		<br>
          <h2>Search results...</h2>
		  
		  <?php
		  $rowcount=mysqli_num_rows($result);
		  if($rowcount!=0){
          echo "<br>About $rowcount results...<a href='search.php'>Search more...</a>";
  
  ?>
        </div><!-- end col -->
      </div><!-- end row -->
     <!-- <div class="row row-tiles">-->
	  <?php 
	  
	  
	  $i=1;
	  while($row = mysqli_fetch_array($result))
  { 
  $id=$row['id'];
  $name=$row['name'];
  $url=$row['url'];
	  if($i==1 || $i==5)
	  {
	    echo "<div class=row row-tiles>";
		$i=1;
	  }
	  
	  ?>
        <div class="col-md-3">
          <div class="tile tile-alt">
		    <form id="<?php echo $id; ?>" method="POST"  action= "http://127.0.0.1/My_davv_tube/DAVV_tube_template/watch.php?id=<?php echo $id; ?>" >
            <input class="tile-photo"  type="submit" style="background-image:url(img/sample/Blank_Video_Thumbnail.jpg);background-position:center center;"  value=""/>
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
		}
  else {
  echo "<font size='4pt'>No results found!</font>";
  echo "<b>&nbsp; <a href='search.php'>Search again...</a></b>";
  }
  mysqli_close($con);
  
     ?>
    <ul>
 </div>
 </div>
  <?php
  
include('footer.php');
?>