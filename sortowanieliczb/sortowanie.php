<!DOCTYPE html>
<html>
	<head>
		<title>Sortowanie</title>
	</head>
	<body>
		<?php
			$liczby = array($_GET["a"],$_GET["b"],$_GET["c"],$_GET["d"],$_GET["e"]);
			sort($liczby);
			echo"</br>Posortowane liczby:</br>";
			for ($i =0; $i < count($liczby); $i++)
			echo "Liczba ".($i+1).": ".$liczby[$i]."</br>";
		?>
	</body>
</html>
			