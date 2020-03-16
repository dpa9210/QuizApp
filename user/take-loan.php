<?php
session_start();
include("../conn.php");
if(!isset($_SESSION['user_id'])){
	header('location:index.php');
	$errorMsg = "Access denied, login now to gain access";
} else{
		header("Content-Type: text/html; charset= utf-8");
}
$amountErr = "";
$amount = "";
$msg = "";
$errorMsg = "";

//strip data
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<?php
if(isset($_POST['loanbtn'])){
if(empty($_POST['amount'])){
		$amountErr = "Enter loan Amount.";
	}else{
			$amount = test_input($_POST["amount"]);
	}
//Data
$amount = $_POST['amount'];
$userid = $_SESSION['user_id'];
$date = $_POST['loandate'];

$error_msg = $amountErr;

if($error_msg==""){
$sql = "INSERT INTO loan_table (user_id, loan_amount, loan_date) VALUES(?,?,?)";
$statement = $con->prepare($sql);
	$statement->bind_param("iss", $userid, $amount, $date);
	if($statement->execute()){
		$msg= "<span style='color:green; font-size:16px;'>Loan Request Successful.</span><br>";

}
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
<title>Take Loan | Employeee Cooperative Management System</title>
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

<?php include '../header.php'; ?>
<div class="row">
	<?php include "user-header.php"; ?>
	<div class="col-md-3">
		<?php include "user-side-menu.php"; ?>
		
	</div>
	<div class="col-md-6">
		<div class="panel panel-info">
		<div class="panel-heading"><h3>Take Loan</h3></div>
		<div class="panel-body">
			<?php if(isset($msg)){
				echo $msg;
			} ?>
			<form name="loanform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
			<label for="amount">Loan Amount</label> <?php echo $amountErr; ?>
			<br>
			<input type="number" name="amount" id="amount" class="form-control" placeholder="Enter Amount">
			<input type="hidden" name="loandate" id="loandate" value='<?php echo date("l, d M Y");  ?>'>
			<br>
			<input type="submit" name="loanbtn" id="loanbtn" class="form-control btn btn-success" value="Submit">
			<br>
			</form>

		</div>

	</div>
	</div>
	<div class="col-md-3"></div>

</div>


<?php include '../footer.php'; ?>
</div>




</body>
</html>