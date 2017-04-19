<!DOCTYPE html>
<html>
	<head>
		<title>BMI</title>
	</head>
	<body>
		<?php
			$wzrost = $_GET["wzrost"]/100;
			$waga = $_GET["waga"];
			echo "wzrost: ".$wzrost."<br>";
			echo "waga: ".$waga."<br>";
			echo "bmi: ".($waga/($wzrost*$wzrost))."<br>";
		?>
	</body>
</html>
			