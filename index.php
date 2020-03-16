<?php
session_start();
include("conn.php"); 
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content=".">
<meta name="keywords" content="">
<meta name="robots" content="index" />
<title>SAFARI SCHOOLS QUIZ APP</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="css/refresh.css">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!--Scripts-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>
<!--Conatiner-->
<div class="container">

<div class="row">
<div class="jumbotron center bg-purple">
	<h2>SAFARI SCHOOLS</h2>

	
</div>
<h3 class="center"><strong>Knowledge is like a garden:<br> If it is not cultivated,<br> it cannot be harvested.</strong></h3>
<br><br>
<div class="center"><a href="quiz-home.php" class="btn btn-warning">START QUIZ</a></div>

</div>
<div class="row">
	
</div>
<?php include 'footer.php'; ?>
</div>




</body>
</html>