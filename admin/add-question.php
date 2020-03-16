<?php
session_start();
include("../conn.php");
//$optiona=$optionb=$optionc=$optiond=$answer=$body=$questionPhoto = $fileName= "";
/*if(!isset($_SESSION['id']) ){
	header('location:index.php');
	$errorMsg = "Access denied, login now to gain access";
} else{
		header("Content-Type: text/html; charset= utf-8");
}*/
if(isset($_POST['AddQuestion'])){
	$body = $_POST['questionBody'];
	$optiona = $_POST['optiona'];
	$optionb = $_POST['optionb'];
	$optionc = $_POST['optionc'];
	$optiond = $_POST['optiond'];
	$answer = $_POST['answer'];

	$query = "INSERT INTO question_table (question_body, optiona, optionb, optionc, optiond, answer) VALUES('$body', '$optiona', '$optionb', '$optionc', '$optiond', '$answer')";

	if(mysqli_query($link, $query)){
			echo "<p style='margin-left:80px; font-size:20px; color:green;'>New question saved successfully.</p>";
		}else{
			echo "<p style='margin-left:80px; font-size:20px; color:Red;'>Question data not saved.</p>";
		}


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
<title>Add New Question | Regina Mundi Primary School</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="../css/refresh.css">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<style>
#imagePreview {
    width: 100px;
    height: 100px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
</style>
<!--Scripts-->
<script src="ckeditor/ckeditor.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
/*$(function() {
    $("#file").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});*/
</script>
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
			<div class="panel panel-heading bg-purple"><strong>Add New Question</strong></div>
			<div class="panel-body cst-panel-body">
				<form name="userreg" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
				<label for="question">Question</label>
				<textarea class="form-control" name="questionBody" required></textarea>
				<br>
				<!--<input type="file" name="questionPhoto" id="questionPhoto" class="form-control">
				<br>
				<div id="imagePreview"></div>
				<br>--><br>
				<label for="option1">OPTION A</label>
				<textarea name="optiona" class="form-control" required placeholder="Enter answer"></textarea>
				<br>
				<label for="option1">OPTION B</label>
				<textarea name="optionb" class="form-control" required placeholder="Enter answer"></textarea>
				<br>
				<label for="option1">OPTION C</label>
				<textarea name="optionc" class="form-control" required placeholder="Enter answer"></textarea>
				<br>
				<label for="option1">OPTION D</label>
				<textarea name="optiond" class="form-control" required placeholder="Enter answer"></textarea>
				<br>
				<label for="option1"><span style="color:#ff0000;">Answer</span></label>
				<textarea name="answer" class="form-control" required placeholder="Enter answer"></textarea>
				<br>
				<input type="submit" name="AddQuestion" id="AddQuestion" class="form-control btn btn-success" value="Add Question">


			</form>

			</div>
		</div>

	</div>
	
</div>
<?php include '../footer.php'; ?>
</div>



 <script>
 CKEDITOR.replace('questionBody');
 CKEDITOR.replace('optiona');
 CKEDITOR.replace('optionb');
 CKEDITOR.replace('optionc');
 CKEDITOR.replace('optiond');
 CKEDITOR.replace('answer');
 </script>
</body>
</html>