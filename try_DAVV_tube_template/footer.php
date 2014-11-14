</div>
<div class="clear"></div>
    
    
    <div class="clear"></div>
      
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="unstyled center list-circle-icons list-circle-icons-small">
              <li class=""><a href="#none"><span class="icon icon-facebook"></span></a></li>
              <li class=""><a href="#none"><span class="icon icon-twitter"></span></a></li>
             <!-- <li class=""><a href="#none"><span class="icon icon-pinterest"></span></a></li>-->
              <li class=""><a href="#none"><span class="icon icon-google-plus"></span></a></li>
             <!-- <li class=""><a href="#none"><span class="icon icon-flickr"></span></a></li> -->
            </ul>
            <ul class="list-inline">
              <li><a href="index.php">Home</a></li>
              <li><a href="<?php echo $set_path;?>about_davv.php">About DT</a></li>
               <li><a href="<?php echo $set_path;?>contact.php">Contact</a></li>
              <li><a href="<?php echo $set_path;?>search.php">Search</a></li>
              <li><a href="<?php echo $set_path;?>logout.php">Sign Out</a></li>
            </ul>
            <p>&copy; Copyright 2013. DAVV-TUBE.</p>
          </div><!-- end col -->
        </div><!-- end row fluid -->
      </div><!-- end container -->
    </footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/dt.js"></script>
    <script>
  _V_("example_video_1").ready(function(){
var myPlayer = this;    // Store the video object
var aspectRatio = 9/16; // Make up an aspect ratio

function resizeVideoJS(){
  // Get the parent element's actual width
  var width = document.getElementById(myPlayer.id).parentElement.offsetWidth;
  // Set width to fill parent element, Set height
  myPlayer.width(width).height( width * aspectRatio );
}

resizeVideoJS(); // Initialize the function
window.onresize = resizeVideoJS; // Call the function on resize
});

</script>
  </body>
</html>
