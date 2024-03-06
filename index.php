<?php
// 1. Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.

echo '<pre>';

$arr = ['first', [true, 'second', ['third', 2, 3, 4, 5], 90, 80, 70], 15, 16, 17, 18];

function searchElementOfArray($arr, $element) {
	$result = [];
	foreach($arr as $key => $value) {
		if($key === $element) {
			array_push($result, $value);
		}

		if(is_array($value)) {
			$iterationResult = searchElementOfArray($value, $element);
			$result = array_merge($result, $iterationResult);
		}
	}
	return $result;
}

$message = searchElementOfArray($arr, 0);

var_dump($message);


echo '<br>';
// 2. Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false

$str = 'Bobby 3, Berlin 1, bobr 2, x6';
$str1 = 'google';
$num = 2243432423;
$symbol = 'b';

function countSymbol($str, $symbol) {
	if(is_string($str)) {
		$count = substr_count(strtolower($str), strtolower($symbol));
		$message = match($count) {
			0 => 'В строке нет буквы b',
			default => "В строке букв $symbol: $count"
		};
		var_dump($message);
	} else {
		var_dump(false);
	}
}
countSymbol($str, $symbol);
countSymbol($str1, $symbol);
countSymbol($num, $symbol);


echo '<br>';
// 3. Создать функцию которая считает сумму значений всех элементов массива произвольной глубины

$arrayOfNumbers = [1, [1, 22, [33, 2, 3, 4, 5], 90, 80, 70], 15, 16, 17, 18];;

function sumArrayValues($arrayOfNumbers) {
	$sum = 0;
	foreach($arrayOfNumbers as $value) {
		if(is_array($value)) {
			$sum += sumArrayValues($value);
		} else {
			$sum += $value;
		}
	}
	return $sum;
}
$res = sumArrayValues($arrayOfNumbers);
var_dump($res);
echo '<br>';

/* 4. Создать функцию которая определит сколько квадратов меньшего размера
можно вписать в квадрат большего размера размер возвращать в float */
function countSquare($big, $small) {
	$bigArea = $big * $big;
	$smallArea = $small * $small;
	return $bigArea / $smallArea;
}
$resSquare = countSquare(20, 8);
var_dump($resSquare);



?>