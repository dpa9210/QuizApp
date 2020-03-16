<?php
session_start();
if(!isset($_SESSION['user_id'])){
	header('location:index.php');
	$errorMsg = "Access denied, login now to gain access";
} else{
		header("Content-Type: text/html; charset= utf-8");
}
include("../conn.php"); 
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
<title>Member Profile | Employeee Cooperative Management System</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="../css/refresh.css">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!--Scripts-->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</head>
<body class="dashboard-bg">
<!--Conatiner-->
<div class="container">

<?php include 'user-header.php'; ?>
<h3><span class="glyphicon glyphicon-home bg-red"></span> Member Panel</h3>

<div class="row">
	<div class="col-md-3">
		<?php include"user-side-menu.php"; ?>

	</div>
	<div class="col-md-9">
	<div class="row">
					<div class="col-md-3">
						<a href="" class="tile bg-purple"><h3 class="title">Total Redemption</h3>
							<p>Something</p></a>
					</div>
					<div class="col-md-3">
						<a href="" class="tile bg-purple"><h3 class="title">Loan Owed</h3>
							<p>Something</p></a>
					</div>
					<div class="col-md-3">

												<a href="" class="tile bg-purple"><h3 class="title">Account Networth</h3>
							<p>Something</p></a>
					</div>
				</div>	

	</div>
	

</div>
<?php include '../footer.php'; ?>
</div>




</body>
</html>