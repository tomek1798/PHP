<!DOCTYPE html>
<html>
	<head>
		<title>BMI</title>
	</head>
	<body>
		<?php
			$wzrost = $_GET["wzrost"]/100;
			$waga = $_GET["waga"];
			$wynik =($waga/($wzrost*$wzrost));
			echo "wzrost: ".$wzrost."<br>";
			echo "waga: ".$waga."<br>";
			echo "bmi: ".$wynik."<br>";
			
			if($wynik<16)
			echo "Wygłodzenie";
			else if ($wynik>=16 && $wynik<17)
			echo "Wychudzenie";
			else if ($wynik>=17 && $wynik<18.5)
			echo "Niedowaga";
			else if ($wynik>=18.5 && $wynik<25)
			echo "Waga prawidłowa";
			else if ($wynik>=25 && $wynik<30)
			echo "Nadwaga";
			else if ($wynik>=30 && $wynik<35)
			echo "I stopień otyłości";
			else if ($wynik>=35 && $wynik<40)
			echo "II stopień otyłości";
			else if ($wynik>40)
			echo "Otyłość skrajna";
		?>
	</body>
</html>
			