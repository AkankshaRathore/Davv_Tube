<?php
// Connect to server and select databse.
include("header.php");
include("connection.php");
$tbl_name="forum_question"; // Table name 

if (isset($_GET["id"])) {
    echo $_GET["id"];
}
else {
    // Parse the URL
}

// get value of id that sent from address bar 
$id=$_GET['id'];
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>
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

    <div class="container">
	  <div class="col-lg-4 col-lg-offset-8">
<a href="new_topic.php"><strong>Create New Topic</strong> </a>
</div>

     
	    <div class="row">
          <div class="col-lg-8">
            <h2>Tube - Blog</h2>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <tbody>
                  <tr class="active">
				    <th>Subject</th>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $rows['topic']; ?></td>
                  </tr>
				  <tr>
				    <th>Comment</th>
					<td align="center" bgcolor="#FFFFFF"><?php echo $rows['detail']; ?></td>
				  </tr>
				  <tr>
				    <th>By</th>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $rows['name']; ?></td>
				  </tr>
				  <tr>
				     <th>Date & Time</th>
					<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>

                  </tr>
	
                </tbody>
              </table>
			  </div>
			  </div>
			  </div>
			  		  <?php

$tbl_name2="forum_answer"; // Switch to table "forum_answer"
$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=mysql_query($sql2);
while($rows=mysql_fetch_array($result2)){
?>
<div class="row">
          <div class="col-lg-8">
            
            <div class="table-responsive">

              <table class="table table-bordered table-hover table-striped tablesorter">
                <tbody>
                  <tr class="active">
				    <th>ID</th>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $rows['a_id']; ?></td>
                  </tr>
				  <tr>
				    <th>Name</th>
					<td align="center" bgcolor="#FFFFFF"><?php echo $rows['a_name']; ?></td>
				  </tr>
				  <tr>
				    <th>Email</th>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $rows['a_email']; ?></td>
				  </tr>
				  <tr>
				    <th>Answer</th>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $rows['a_answer']; ?></td>
				  </tr>
				  <tr>
				     <th>Date & Time</th>
					<td align="center" bgcolor="#FFFFFF"><?php echo $rows['a_datetime']; ?></td>

                  </tr>
	
                </tbody>
              </table>
            		  
		  <?php
}

$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=mysql_query($sql3);
$rows=mysql_fetch_array($result3);
$view=$rows['view'];
 
// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=mysql_query($sql4);
}
 
// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysql_query($sql5);
mysql_close();
?>

		</div>
       </div>
</div>
<div class="row">
        <div class="col-lg-4 col-md-offset-2">
          <form class="form-signin" method="post" action="add_answer.php">
        <h2 class="form-signin-heading">Reply:</h2>
		<input type="text" class="form-control required" name="a_name" placeholder="Enter your Name" autofocus required><br>
        <input type="email" class="form-control required" name="a_email" placeholder="Email address" required><br>
        <textarea class="form-control required" rows="5" name="a_answer" placeholder="Enter Your Reply Here" required></textarea><br>
		<input name="id" type="hidden" value="<?php echo $id; ?>">
        <button class="btn btn-lg btn-primary" type="submit">Submit</button>
		<button class="btn btn-lg btn-primary" type="reset">Reset</button>
      </form>

        </div>
      </div>
    </div><!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
<?php include("footer.php");?>
</html>