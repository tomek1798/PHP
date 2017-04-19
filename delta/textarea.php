<!DOCTYPE html>
<html>
	<head>
		<title>Strona Xa PHP</title>
		<meta charset="UTF-8"></meta>
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