<html>
<head>
	<title> | Whack.A.Buzz</title>
	<link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<script src="/js/jquery.js"></script>
	<style type="text/css">
		#game-board{
			margin: 10px auto;
			width: 456px;
		}
		.hole {
			border: 2px solid #d9534f;
			float: left;
			height: 150px;
			width: 150px;
		}
		#main-title{
			text-align: center;
		}
		body {
			font-family: 'Nothing You Could Do', cursive;
			text-align: left;
			color: #d9534f;
			background-image: url("/assets/images/whack-game/toystory.jpg");
			background-size: 420px 680px;
			background-repeat: no-repeat;
			background-color: #F8F8DC;	
		}
		img{
			width: 140px;
		}
	</style>
</head>
<body>
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
			<div id="game-board">
 
		<div class="hole">
			<img class="img-circle" src="/assets/images/whack-game/buzz.jpeg">
		</div>
		<div class="hole">
			<img class="img-circle" src="/assets/images/whack-game/buzz.jpeg">
		</div>
		<div class="hole">
			<img class="img-circle" src="/assets/images/whack-game/buzz.jpeg">
		</div>
 
		<div class="hole">
			<img class="img-circle" src="/assets/images/whack-game/buzz.jpeg">
		</div>
		<div class="hole">
			<img class="img-circle" src="/assets/images/whack-game/buzz.jpeg">
		</div>
		<div class="hole">
			<img class="img-circle" src="/assets/images/whack-game/buzz.jpeg">
		</div>
 
		<div class="hole">
			<img class="img-circle" src="/assets/images/whack-game/buzz.jpeg">
		</div>
		<div class="hole">
			<img class="img-circle" src="/assets/images/whack-game/buzz.jpeg">
		</div>
		<div class="hole">
			<img class="img-circle" src="/assets/images/whack-game/buzz.jpeg">
		</div>
		<h1 id="main-title">To Infinity and Beyond!</h1>
	</div>
	</div>
	<div class="col-md-2">
		<h3>Your Score is: <span id="score">0</span></h3>
		<h3>Time: <span id="timer">30</span></h3>
		<h3>Highscore: <span id="highscore">0</span></h3>
		<p>
			<button class="btn btn-danger" id="start">Start</button>
	 		<button class="btn btn-danger" id="play-again">Play Again?!</button>
		</p>
	</div>
	<script type="text/javascript">
		$('img').hide();
		$('#play-again').hide();
		$('#highscore').html(highscore);

		var score = 0;
		var highScore = 0;
		var speed = 1000;
		var timer = 30;
        var timeoutID = null;

        $('#highscore').html(highScore);

        function endGame() {
        	clearInterval(timeoutID);
        	clearInterval(buzzInterval);
        	$('img').hide();
        	$('#start').hide();
        	$('#play-again').show();
        	score = 0;
        	$('#score').html(score);
        	speed = 1000;

        }

		function newBuzz() {
			var holes = $('.hole');
			var rand = Math.floor(Math.random() * holes.length);
			$(holes).children().fadeOut();
			$(holes[rand]).children().show();
		}

		$('#start, #play-again').on('click', startGame);

		function startGame() {
			console.log('started');
			timer = 30;
			clearInterval(timeoutID);
  			timeoutID = setInterval(function () {
  				timer--;
  				// speed -= 50;
  				console.log(timer);
  				$('#timer').html(timer);
  				if (timer <= 0) {
  					endGame();
  				}
  			}, 1000);

        	BuzzInterval = setInterval(newBuzz, speed);	

		};

		$('img').on('click', function(){
			$(this).fadeOut();
			clearInterval(BuzzInterval);
			if(score <= 5) {
				speed = 1000;
			} else if(score <= 10) {
				speed = 600;
			} else if(score <= 15) {
				speed = 350;
			}
		    BuzzInterval = setInterval(newBuzz, speed);
			score++;
			if(score > highScore) {
				highScore = score;
				$('#highscore').html(highScore);
			}
			$('#score').html(score);
		});
	</script>
</body>
</html>