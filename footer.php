<?php
include("analytics.php");

 ?> 
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
             <!-- <li class=""><a href="#none"><span class="icon icon-flickr"></span></a></li>-->
            </ul>
            <ul class="list-inline">
              <li><a href="index.php">Home</a></li>
              <li><a href="about_davv.php">About DT</a></li>
               <li><a href="contact.php">Contact</a></li>
             <!-- <li><a href="http://127.0.0.1/My_davv_tube/try_DAVV_tube_template/search.php">Search</a></li>-->
              <li><a href="login.php">Login</a></li>
            </ul>
            <p>&copy; Copyright 2013. DAVV-TUBE.<a href="admin_login.php"> &nbsp;Devi Ahilya University</a></p>
          </div><!-- end col -->
        </div><!-- end row fluid -->
      </div><!-- end container -->
    </footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="try_DAVV_tube_template/js/jquery.min.js"></script>
    <script src="try_DAVV_tube_template/js/bootstrap.js"></script>
    <script src="try_DAVV_tube_template/js/dt.js"></script>
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
