<html lang="en-ca">
	<head>
		<!-- Meta Data -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Favicon -->
	    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
	    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
	    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
	    <link rel="manifest" href="./fav_index/site.webmanifest" />
		<!-- Css style sheet -->
		<link rel="stylesheet"dfghj href="./css/style.css" />
		<title>Volume of a Sphere</title>
	</head>
	<body>
		<!-- Title, Info and image -->
		<center><?php 
			echo '<center><h1>Volume of a Sphere</h1></center>';
			echo '<img src="./images/Volume.jpg" width="25%"/>';
			echo '<center><p>Formula for the volume of a sphere.</center></p>';
			echo "<p><center>Fill out the text fields below and determine the volume of the sphere</center></p>"; 
		?>
		<!-- Textfields -->
		<form method = "post">   
			Radius <input type="number" name="radius" step="0.01">   
			<br><br>   
			Unit of measurement <input type="text" name="unit">   
			<br><br>
			<!-- Button -->
			<input type = "submit" name = "enter" value="Calculate">    
			<br><br>
		<!-- Variables and Calculations -->
		<?php  
			if(isset($_POST['enter'])) {  
				$radius = $_POST['radius'];   
				$unit = $_POST['unit']; 
				$volume = 4 / 3 * pi() * $radius ** 3;
				$volume = round($volume, 2);
				echo "<br><br>The volume of the sphere is ". $volume . $unit ."³";
			}
		?>
	</body>
</html>