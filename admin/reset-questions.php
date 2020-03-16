<?php
session_start();

include("../conn.php");
if(isset($_POST['resetbtn'])){
	$query = mysqli_query($link, "UPDATE question_table SET question_status='1'");
if($query){
			$msg = "Question Database Reset Successful";


}else{
		$msg = "Reset failed. Try again!";

}

}

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
<title>Admin Panel | Regina Mundi Primary School Asaba</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="../css/refresh.css">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!--Scripts-->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</head>
<body>
<!--Conatiner-->
<div class="container">

<?php include 'admin-header.php'; ?>
<div class="row">
	<div class="col-md-3">
		<div class="panel">
			<div class="panel-heading bg-purple"><strong>Admin Menu</strong></div>
			<div class="panel-body cst-panel-body">
				<?php include 'admin-side-menu.php'; ?>
			</div>
		</div>

	</div>
	<div class="col-md-9">
		<?php include 'welcome.php'; ?>
		<div class="panel">
			<div class="panel panel-heading bg-purple"><strong>Reset</strong></div>
			<div class="panel-body cst-panel-body">
				<?php
					if(!empty($msg)){
						echo $msg;
					}
				?>
				<form name="resetform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<input class="btn btn-danger" type="submit" name="resetbtn" value="RESET QUESTION DATABASE">
				</form>
				

			</div>
		</div>

	</div>
	
</div>
<?php include '../footer.php'; ?>
</div>




</body>
</html>