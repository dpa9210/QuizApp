<?php
session_start();
include("conn.php"); 
$id = $_GET['id'];
if(!is_numeric($id)){
	echo "An error has occurred";
	exit;
}
?>
<?php
$result = mysqli_query($link, "SELECT * FROM question_table WHERE question_id = '$id'");
$questionDetail = mysqli_fetch_assoc($result);
$query1 = mysqli_query($link, "UPDATE question_table SET question_status='0' WHERE question_id='$id'");
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
<title>REGINA MUNDI QUIZ APP</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="css/refresh.css">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<style type="text/css">
	span {
    border:1px solid gray;
    padding:5px;
    border-radius:4px;    
}

.timer {
    padding:1px;
    margin:8px;
    font-size: 22px;
}
.main {
    background-color:#ffffff;
    padding:3px;
    width:200px;
    text-align:center;
    margin-top: 40px;
}

.warn {
    background-color:yellow;
    color: #000000;
}
.error {
    background-color:red;
    color: #000000;
    font-size: 22px;
    font-style: normal;
}

</style>
<!--Scripts-->

<script type="text/javascript">
	function timer() {
    var time = {
        sec: 60,
        min: 00,
        hr: 00
    };
    var finalLimit = null,
        warnLimit = null,
        errorLimit = null;
    var max = 59;
    var interval = null;

    function init(_hr, _min, _sec) {
        time["hr"] = _hr ? _hr : 0;
        time["min"] = _min ? _min : 0;
        time["sec"] = _sec ? _sec : 0;
        printAll();
    }

    function setLimit(fLimit, wLimit, eLimit) {
        finalLimit = fLimit;
        warnLimit = 35;
        errorLimit = 50;
    }

    function printAll() {
        print("sec");
        print("min");
        print("hr");
    }

    function update(str) {
        time[str]++;
        time[str] = time[str] % 60;
        if (time[str] == 0) {
            str == "sec" ? update("min") : update("hr");
        }
        print(str);
    }

    function print(str) {
        var _time = time[str].toString().length == 1 ? "0" + time[str] : time[str];
        document.getElementById("lbl" + str).innerHTML = _time;
    }

    function validateTimer() {
        var className = "";
        var secs = time.sec + (time.min * 60) + (time.hr * 60 * 60);
        if (secs >= finalLimit) {
            stopTimer();
            displayText();
            playAudio();
            
        } else if (secs >= errorLimit) {
            className = "error";
        } else if (secs >= warnLimit) {
            className = "warn";
        }
        var element = document.getElementsByTagName("span");
        document.getElementById("lblsec").className = className;
    }

    function startTimer() {
        init();
        if (interval) stopTimer();
        interval = setInterval(function () {
            update("sec");
            validateTimer();
        }, 1000);
    }

    function stopTimer() {
        window.clearInterval(interval);
    }
    
    function displayText(){
    document.getElementById('finishText').innerHTML = "<span style='color:red;'>TIME UP</span>";
    
        }

    function resetInterval() {
        stopTimer();
        time["sec"] = time["min"] = time["hr"] = 0;
        printAll();
        startTimer();
    }

    return {
        'start': startTimer,
            'stop': stopTimer,
            'reset': resetInterval,
            'init': init,
            'setLimit': setLimit
    }
};

var time = new timer();

function initTimer() {
    time.init(0, 0, 0);
}

function startTimer() {
    time.start();
    time.setLimit(60, 5, 8);
    document.getElementById('finishText').innerHTML = "";

}

function endTimer() {
    time.stop();
    document.getElementById('finishText').innerHTML = "";
}

function resetTimer() {
    time.reset();
    document.getElementById('finishText').innerHTML = "";

}
</script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>
<!--Conatiner-->
<div class="container">


<div class="row">
	<div class="panel">
		<div class="panel-heading bigsize bg-purple"><strong>QUESTION <?php echo $questionDetail['question_id'];  ?></strong></div>
		<div class="panel-body">
			<div class="row">
				<!--<div class="col-md-10">
                    
                </div>-->
				<!--<div class="col-md-2">
                                        
									</div>-->
            <?php echo "<div class='biggersize'>".$questionDetail['question_body']."</div>"; ?>
            <?php echo "<div class='bigsize'>"."<b>A.</b> ". $questionDetail['optiona']."</div>";?>
            <?php echo "<div class='bigsize'>"."<b>B.</b> ". $questionDetail['optionb']."</div>";?>
            <?php echo "<div class='bigsize'>"."<b>C.</b> ". $questionDetail['optionc']."</div>";?>
            <?php echo "<div class='bigsize'>"."<b>D.</b> ". $questionDetail['optiond']."</div>";?>


                                    <p class="center">
                                        <div class="main center">
                                        <strong>Timer</strong></p>
                                    <div class="timer"> <span id="lblhr">00</span>
                                    : <span id="lblmin">00</span>
                                    : <span id="lblsec">00</span>
                                    </div>
                                    <button class="btn btn-success btn-sm" onclick="startTimer()">Start</button>
                                    <button class="btn btn-warning btn-sm" onclick="endTimer()">Stop</button>
                                    <button class="btn btn-danger btn-sm" onclick="resetTimer()">Reset</button>
                                    <br><br>
                                    <strong><p id="finishText"> 
                                    </p></strong>

				</div>
			</div>

			<p class="right"> <button type="button" class="btn btn-success btn-sm" data-toggle="collapse" data-target="#answerDiv">VIEW ANSWER <span class="glyphicon glyphicon-search"></span></button> <a href="quiz-home.php" type="button" class="btn btn-info btn-sm">QUESTIONS <span class="glyphicon glyphicon-arrow-right"></span></a></p>
			<div class="collapse" id="answerDiv">
				<?php echo "<div class='center bigsize bg-green'>".$questionDetail['answer']."</div>"; ?>

			</div>		
		</div>
</div>
</div>

<div class="row">
	
</div>
</div>

<audio id="myAudio">
  <source src="uploads/beep.mp3" type="audio/mpeg">
  <source src="uploads/beep.ogg" type="audio/ogg">
  <source src="uploads/beep.wav" type="audio/wav">
    </audio>
<script>
		var x = document.getElementById("myAudio"); 

		function playAudio() { 
    	x.play(); 
} 	

								

</script>
</body>
</html>