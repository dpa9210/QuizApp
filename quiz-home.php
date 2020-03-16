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
<div class="center">
	<h2 class="purple"><strong>SAFARI SCHOOLS.</strong></h2>
	<h1><p><strong>MATHEMATICS <br>QUIZ COMPETITION</strong></p></h1>
	</div>
	<div class="panel">
		<div class="panel-heading bg-purple">QUESTIONS</div>
		<div class="panel-body">
			<?php 
			if($result = $link->query("SELECT * FROM question_table LIMIT 50")){

				if($result->num_rows > 0){
					echo "<div class='btn btn-group' style='width:100%'>";
						while($row = $result->fetch_object()){
							if($row->question_status==1){
							echo "<a class='btn btn-success' style='width:50px; margin:8px;' href='question-detail.php?id=".$row->question_id."'>".$row->question_id."</a>";

							}else{
							echo "<a class='btn bg-black disabled' style='width:50px; margin:8px;' href='question-detail.php?id=".$row->question_id."'>".$row->question_id."</a>";

							}

						}


					echo "</div>";
				}
			}
			
			?>
			



		</div>
</div>
</div>
<div class="row">
	
</div>
<?php include 'footer.php'; ?>
</div>




</body>
</html>