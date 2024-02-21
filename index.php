<?php

	// Дії з числами
	//TODO 1.1. Отримати залишок від ділення 7 на 3
	//TODO 1.2. Отримати цілу частину ділення 7 и 7,15
	//TODO 1.3. Отримати корінь из 25

	$remainder = 7 % 3;
	$quotient = intval(7 / 7.15);
	$squareRoot = sqrt(25);

	echo "
	$remainder
	$quotient
	$squareRoot
	";

	// Дії зі строками
	//TODO 2.1. Отримати 4-е слово з фрази - Десять негритят пошли купаться в море
	//TODO 2.2. Отримання 17-го символу з фрази 'Десять негритят пошли купаться в море'
	//TODO 2.3. Зробити великою кожну першу букву слів фрази - Десять негритят пошли купаться в море
	//TODO 2.4. Порахування довжини строки 'Десять негритят пошли купаться в море'

	// 2.1
	$phrase = "Десять негритят пошли купаться в море";
	$words = explode(" ", $phrase);
	$fourthWord = $words[3];

	echo "$fourthWord ";

	// 2.2
	$index = 16;
	$seventeenthChar = mb_substr($phrase, $index, 1);

	echo "$seventeenthChar ";

	// 2.3
	$capitalizedPhrase = mb_convert_case($phrase, MB_CASE_TITLE, "UTF-8");

	echo "$capitalizedPhrase ";

	// 2.4
	$lenght = mb_strlen($phrase);

	echo "$lenght ";

	// 3. Дії з логіческими даними
	//TODO 3.1. Чи вірно твердження true дорівнює 1
	//TODO 3.2. Чи вірно твердження false тождественно 0
	//TODO 3.3. Яка строка більше three - три
	//TODO 3.4. Яке число більше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2

	// 3.1
	$checkTrueOrFalse = true == 1; // true
	$resultForTrue = $checkTrueOrFalse ? 'Так' : 'Ні';
	// $result;
	// if ($checkTrueOrFalse) {
	// 	$result = 'True';
	// } else {
	// 	$result = 'Fasle';
	// }

	echo "$resultForTrue ";

	// 3.2
	$checkFalseOrTrue = false === 0; //false
	$resultForFalse = $checkFalseOrTrue ? 'Так' : 'Ні';

	echo "$resultForFalse ";

	// 3.3
	$firstStr = "three";
	$secondStr = "три";
	// $compare = strcmp($firstStr, $secondStr);
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

	echo "$compareResult ";

	// 3.4
	$firstCalculation = 125 * 13 + 7;
	$secondCalculation = 223 + 28 * 2;
	$resNumber = "";

	if ($firstCalculation > $secondCalculation) {
			$resNumber = "Перше число ($firstCalculation) быльше за ($secondCalculation)";
	} else {
			$resNumber = "Друге число ($secondCalculation) быльше за ($firstCalculation)";
	}
	
	echo "$resNumber ";
?>