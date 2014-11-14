<?php
//if(isset($_SESSION['username'])) {


include("header.php");
include("connection.php");
//$tbl_name="forum_question"; // Table name 
$sql="SELECT * FROM forum_question WHERE status = 1";
// OREDER BY id DESC is order result by descending

$result=mysql_query($sql);


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
s

    <div class="container">

     
	          <div class="row">
          <div class="col-lg-8">
            <h2>Tube - Blog</h2>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>S. No.<i class="fa fa-sort"></i></th>
                    <th>Blog posts <i class="fa fa-sort"></i></th>
                    <th>View <i class="fa fa-sort"></i></th>
					<th>Reply <i class="fa fa-sort"></i></th>
					<th>Date & Time <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
				<?php
 
// Start looping table row
while($rows=mysql_fetch_array($result)){
?>

                <tbody>
                  <tr class="active">
                    <td><?php echo $rows['id']; ?></td>
                    <td><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></td>
					<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
					<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>

                  </tr>
				  <?php
// Exit looping and close connection 
}
//mysql_close(); // Commented by komal
?>
                </tbody>
              </table>
            </div>
          </div>
<a href="new_topic.php"><strong>Create New Topic</strong> </a>
    </div><!-- /.container -->
<?php include("footer.php");?>
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>

</html>
<?php/* }
else {
header ("location:../../login.php");
}*/

?>
