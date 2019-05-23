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


		<title>Functions - Functions</title>

	</head>

<html>
<body>

<div class="container-fluid">


	<div class="wrapper-title">
		<div><h3>Functions</h3></div>
	</div>

	<div class="wrapper">

		<?php

			function nickname_generate() {
				if (isset($_POST["name"])) {
  						$str = $_POST["name"];
  						
  						// Reverse name	
  						echo "<li>" . strrev("$str") . "</li>";
  						// Capitalize name
  						echo "<li>" . strtoupper($str) . "</li>";
  						// Shuffle letters in name
  						echo "<li>" . str_shuffle($str) . "</li>"; 
  						// Prepend "x"
  						echo "<li>" . substr_replace($str, 'x', 0,0) . "</li>";
  						// Wrapp name between "--"
						echo "<li>--" . $str . "--</li>";
  						// Prepend 1 to 4 random characters
  						$length = rand(1,4);
						$randomStr = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
						echo "<li>" . $randomStr.$str . "</li>";
						// Prepend 1 to 4 random characters and wrap them between "[]"
  						$length = rand(1,4);
						$randomStr = "[" . substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length) . "]";
						echo "<li>" . $randomStr.$str . "</li>";
						// Capitalize random nbr of characters				
						$i = 0;
						while ($i < strlen($str)){
    						$tmp=$str[$i];
    						if(rand() % 2 ==0) $tmp=strtoupper($tmp);
    						else $tmp=strtolower($tmp);
    						$str[$i]=$tmp;
    						$i++;
						}
						echo "<li>" . $str . "</li>";
  					}
			}

			nickname_generate();

		?>





	</div>

	
</div>


</body>
</html>
