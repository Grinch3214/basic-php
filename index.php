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
		<h2 class="title">1. Дії з числами</h2>
		<?php

		$remainder = 7 % 3;
		$quotient = intval(7 / 7.15);
		$squareRoot = sqrt(25);

		echo "
		<ul class='list'>
			<li>1.1. Отримати залишок від ділення 7 на 3: <span>$remainder</span></li>
			<li>1.2. Отримати цілу частину ділення 7 и 7,15: <span>$quotient</span></li>
			<li>1.3. Отримати корінь из 25: <span>$squareRoot</span></li>
		</ul>
		";

		echo '
			<pre>
				<code>
					<span class="comment">// 1.1</span>
					<span class="varible">$remainder</span> = 7 % 3;

					<span class="comment">// 1.2</span>
					<span class="varible">$quotient</span> = intval(7 / 7.15);

					<span class="comment">// 1.3</span>
					<span class="varible">$squareRoot</span> = sqrt(25);
				</code>
			</pre>
		';

		?>

		<h2 class="title">2. Дії зі строками</h2>
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
			<li>2.1. Отримати 4-е слово з фрази - Десять негритят пошли купаться в море: <span>$fourthWord</span></li>
			<li>2.2. Отримання 17-го символу з фрази 'Десять негритят пошли купаться в море': <span>$seventeenthChar</span></li>
			<li>2.3. Зробити великою кожну першу букву слів фрази - Десять негритят пошли купаться в море: <span>$capitalizedPhrase</span></li>
			<li>2.4. Порахування довжини строки 'Десять негритят пошли купаться в море': <span>$lenght</span></li>
		</ul>
		";

		echo '
			<pre>
				<code>
					<span class="comment">// 2</span>
					<span class="varible">$phrase</span> = "Десять негритят пошли купаться в море";

					<span class="comment">// 2.1</span>
					<span class="varible">$words</span> = explode(" ", $phrase);
					<span class="varible">$fourthWord</span> = <span class="varible">$words</span>[3];

					<span class="comment">// 2.2</span>
					<span class="varible">$index</span> = 16;
					<span class="varible">$seventeenthChar</span> = mb_substr(<span class="varible">$phrase</span>, <span class="varible">$index</span>, 1);

					<span class="comment">// 2.3</span>
					<span class="varible">$capitalizedPhrase</span> = mb_convert_case(<span class="varible">$phrase</span>, MB_CASE_TITLE, "UTF-8");

					<span class="comment">// 2.4</span>
					<span class="varible">$lenght</span> = mb_strlen(<span class="varible">$phrase</span>);
				</code>
			</pre>
		';

		?>

		<h2 class="title">3. Дії з логіческими даними</h2>
		<?php

		// 3.1
		$checkTrueOrFalse = true == 1;
		// $result;
		// if ($checkTrueOrFalse) {
		// 	$result = 'True';
		// } else {
		// 	$result = 'Fasle';
		// }
		$resultForTrue = $checkTrueOrFalse ? 'Так' : 'Ні';

		// 3.2
		$checkFalseOrTrue = false === 0;
		$resultForFalse = $checkFalseOrTrue ? 'Так' : 'Ні';

		// 3.3
		$firstStr = "three";
		$secondStr = "три";
		$compare = strcmp(mb_strlen($firstStr), mb_strlen($secondStr));
		$compareResult = "";
		switch($compare) {
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
			<li>3.1. Чи вірно твердження true дорівнює 1: <span>$resultForTrue</span></li>
			<li>3.2. Чи вірно твердження false тождественно 0: <span>$resultForFalse</span></li>
			<li>----------------------------------------------------------------------</li>
			<li>3.3. Яка строка більше three - три: <span>$compareResult</span></li>
			<li>3.4. Яке число більше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2: <span>$resNumber</span></li>
		</ul>
		";

		echo '
			<pre>
				<code>
					<span class="comment">// 3.1</span>
					<span class="varible">$checkTrueOrFalse</span> = true == 1;
					<span class="varible">$resultForTrue</span> = <span class="varible">$checkTrueOrFalse</span> ? "Так" : "Ні";

					<span class="comment">// 3.2</span>
					<span class="varible">$checkFalseOrTrue</span> = false === 0;
					<span class="varible">$resultForFalse</span> = <span class="varible">$checkFalseOrTrue</span> ? "Так" : "Ні";

					<span class="comment">// 3.3</span>
					<span class="varible">$firstStr</span> = "three";
					<span class="varible">$secondStr</span> = "три";
					<span class="varible">$compare</span> = strcmp(<span class="varible">$firstStr</span>, <span class="varible">$secondStr</span>);
					<span class="varible">$compareResult</span> = "";

					switch(<span class="varible">$compare</span>) {
						&nbsp case 0:
							&nbsp &nbsp <span class="varible">$compareResult</span> = "Строки рівні";
							&nbsp &nbsp break;
						&nbsp case 1:
							&nbsp &nbsp <span class="varible">$compareResult</span> = "Строка <span class="varible">$firstStr</span> більша за <span class="varible">$secondStr</span>";
							&nbsp &nbsp break;
						&nbsp case -1:
							&nbsp &nbsp <span class="varible">$compareResult</span> = "Строка <span class="varible">$secondStr</span> більша за <span class="varible">$firstStr</span>";
							&nbsp &nbsp break;
						&nbsp default:
							&nbsp &nbsp <span class="varible">$compareResult</span> = "Помилка при зрівнянні строк";
							&nbsp &nbsp break;
					}

					<span class="comment">// 3.4</span>
					<span class="varible">$firstCalculation</span> = 125 * 13 + 7;
					<span class="varible">$secondCalculation</span> = 223 + 28 * 2;
					<span class="varible">$resNumber</span> = "";

					if (<span class="varible">$firstCalculation</span> > <span class="varible">$secondCalculation</span>) {
						&nbsp &nbsp <span class="varible">$resNumber</span> = "Перше число (<span class="varible">$firstCalculation</span>) быльше за (<span class="varible">$secondCalculation</span>)";
					} else {
						&nbsp &nbsp <span class="varible">$resNumber</span> = "Друге число (<span class="varible">$secondCalculation</span>) быльше за (<span class="varible">$firstCalculation</span>)";
					}
				</code>
			</pre>
		';

		?>
	</div>
</body>
</html>