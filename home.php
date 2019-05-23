<html>

<!DOCTYPE html>

	<html lang="en">


	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Jquery js -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

		<!--Bootstrap--> 	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

		<!--Ajax--> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!--My CSS--> 	
		<link href="stylesheet.css" rel="stylesheet" type="text/css">

		<!--Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 


		<title>Functions - Home</title>

	</head>

<html>
<body>

<div class="container-fluid">


	<div class="wrapper-title">
		<div><h1>Home</h1></div>
	</div>

	<div class="wrapper">

		<div class="row">

			<div class="col col-md-2">
				<form action="" method="post">
					<button type="submit" method="post" name="info" class="btn btn-primary" id="button1">Generate</button>
				</form>
			</div>

			<div class="col col-md-2">
				<button type="button" class="btn btn-primary" id="button2">Revert</button>
			</div>

			<div class="col col-md-4">
				<form action="" method="post">
					 <button type="submit" name="nickname" id="enterNickname" class="btn btn-primary" id="button3"/>Nickname</button><input type="text" name="name">
				</form>

			</div>

		</div>

		<div class="row">

			<div class="require">
				<?php require 'security.php';?>
			</div>

			<div class="include">
				<?php include 'functions.php';?>
			</div>

		</div>

	</div>


</div>


</body>
</html>
