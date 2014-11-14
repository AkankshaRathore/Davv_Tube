<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tube-blog</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <style>
	body {margin-top: 60px;}
    </style>

  </head>

  <body>
   <div class="container" data-bind="load: loadData()">
		<div class="row">
		<div class="col-md-4 col-md-offset-4">
		<form class="form-signin" name="form1" method="post" action="add_topic.php">
        <h2 class="form-signin-heading">Create New Topic:</h2>
        <input type="text" class="form-control required" name="name" placeholder="Enter your name" autofocus required><br>
		<input type="email" class="form-control required" name="email" placeholder="Email address" required><br>
		<input type="text" class="form-control required" name="topic" placeholder="Enter Subject" required><br>
        <textarea class="form-control required" rows="5" name="detail" placeholder="Enter Comment here" required></textarea>
			<br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Post</button>
      </form>

<!--click counter starts-->
		  <span data-bind='text: numberOfClicks'>&nbsp;</span>
		  	  <script src="knockout-2.3.0.js"></script>
		  <script src="js/jquery-1.7.2.min.js"></script>
		  <script>
		  var ClickCounterViewModel = function() {
		  this.numberOfClicks = ko.observable(0);
 
		  this.registerClick = function() {
          this.numberOfClicks(this.numberOfClicks() + 1);
			};
 
 
		  };
 
		ko.applyBindings(new ClickCounterViewModel());
		</script>

		</div>
	  </div>
	</div>
<!-- /.container -->
<?php include("footer.php");?>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>