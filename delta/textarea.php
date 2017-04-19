<!DOCTYPE html>
<html>
	<head>
		<title>delta</title>
	</head>
	<body>
		<?php
			$a = $_GET["a"];
			$b = $_GET["b"];
			$c = $_GET["c"];
			echo "a: ".$a."</br>";
			echo "b: ".$b."</br>";
			echo "c: ".$c."</br>";
			echo "</br>";
			$delta = $b*$b-4*$a*$c;
			echo "Delta: ".$delta."<br>";
		?>
	</body>
</html>
			