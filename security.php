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


		<title>Functions - Security</title>

	</head>

<html>
<body>

<div class="container-fluid">


	<div class="wrapper-title">
		<div><h3>Security</h3></div>
	</div>

	<div class="wrapper">

		<div class="wrapper-instruction">
			<h4>Are you a bot from the future coming to exterminate the human race and you just want a cool nickname?</h4>
		</div>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

			<div class="row">

				<div class="col col-md-6 text-center">
					<input class="gif" type="image" src="img/yes.gif"><br/>
					<input type="radio" name="login" value="yes" class="radioButton">	
				</div>

				<div class="col col-md-6 text-center">
					<input class="gif" type="image" src="img/no.gif"><br/>
					<input type="radio" name="login" value="no" class="radioButton">
				</div>

		</div>

		<div class="row text-center">

			<button type="submit" name="info" class="btn btn-primary" id="button4">Submit</button>

		</div>

	</form>

            </div>


	
</div>



</body>
</html>
