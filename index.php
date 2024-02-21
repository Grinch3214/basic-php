<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<title>PHP testing</title>
</head>
<body>
<div class="container">
		<h2 class="title">Дії з числами</h2>
		<?php

		$remainder = 7 % 3;
		$quotient = intval(7 / 7.15);
		$squareRoot = sqrt(25);

		echo "
		<ul class='list'>
			<li>Отримати залишок від ділення 7 на 3: <span>$remainder</span></li>
			<li>Отримати цілу частину ділення 7 и 7,15: <span>$quotient</span></li>
			<li>Отримати корінь из 25: <span>$squareRoot</span></li>
		</ul>
		";

		?>

		<h2 class="title">Дії зі строками</h2>
		<?php

		// 2.1
		$phrase = "Десять негритят пошли купаться в море";
		$words = explode(" ", $phrase);
		$fourthWord = $words[3];

		// 2.2
		$index = 16;
		$seventeenthChar = mb_substr($phrase, $index, 1);

		// 2.3
		$capitalizedPhrase = mb_convert_case($phrase, MB_CASE_TITLE, "UTF-8");

		// 2.4
		$lenght = mb_strlen($phrase);

		echo "
		<ul class='list'>
			<li>Отримати 4-е слово з фрази - Десять негритят пошли купаться в море: <span>$fourthWord</span></li>
			<li>Отримання 17-го символу з фрази 'Десять негритят пошли купаться в море': <span>$seventeenthChar</span></li>
			<li>Зробити великою кожну першу букву слів фрази - Десять негритят пошли купаться в море: <span>$capitalizedPhrase</span></li>
			<li>Порахування довжини строки 'Десять негритят пошли купаться в море': <span>$lenght</span></li>
		</ul>
		";

		?>

		<h2 class="title">Дії з логіческими даними</h2>
		<?php

		// 3.1
		$checkTrueOrFalse = true == 1;
		// $result;
		// if ($checkTrueOrFalse) {
		// 	$result = 'True';
		// } else {
		// 	$result = 'Fasle';
		// }
		$resultForTrue = $checkTrueOrFalse ? 'True' : 'False';

		// 3.2
		$checkFalseOrTrue = false === 0;
		$resultForFalse = $checkFalseOrTrue ? 'True' : 'False';

		// 3.3
		$firstStr = "three";
		$secondStr = "три";
		$compare = strcmp($firstStr, $secondStr);
		$compareResult = "";
		switch ($compare) {
			case 0:
				$compareResult = "Строки рівні";
				break;
			case 1:
				$compareResult = "Строка $firstStr більша за $secondStr";
				break;
			case -1:
				$compareResult = "Строка $secondStr більша за $firstStr";
				break;
			default:
				$compareResult = "Помилка при зрівнянні строк";
				break;
		}

		// 3.4
		$firstCalculation = 125 * 13 + 7;
		$secondCalculation = 223 + 28 * 2;
		$resNumber = "";

		if ($firstCalculation > $secondCalculation) {
				$resNumber = "Перше число ($firstCalculation) быльше за ($secondCalculation)";
		} else {
				$resNumber = "Друге число ($secondCalculation) быльше за ($firstCalculation)";
		}
		
		echo "
		<ul class='list'>
			<li>Чи вірно твердження true дорівнює 1: <span>$resultForTrue</span></li>
			<li>Чи вірно твердження false тождественно 0: <span>$resultForFalse</span></li>
			<li>----------------------------------------------------------------------</li>
			<li>Яка строка більше three - три: <span>$compareResult</span></li>
			<li>Яке число більше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2: <span>$resNumber</span></li>
		</ul>
		";

		?>
	</div>
</body>
</html>