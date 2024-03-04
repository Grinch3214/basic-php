<?php
	echo '<pre>';
// TODO 1
	$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
	// посчитать длину массива

	var_dump(count($arr));
	echo '<br>';
	
	// переместить первые 4 элемента массива в конец массива
	array_push($arr, ...array_splice($arr, 0, 4));
	var_dump($arr);
	echo '<br>';
	// получить сумму 4,5,6 элемента
	
	// массив изменен [31, 4, 1, 8, 6, 1, 2, 3, 7]
	$newArr = array_splice($arr, 3,	3); // [8, 6, 1] = 15
	var_dump(array_sum($newArr));
	echo '<br>';

// TODO 2
	$firstArr = [
		'one' => 1,
		'two' => 2,
		'three' => 3,
		'foure' => 5,
		'five' => 12,
	];

	$secondArr = [
		'one' => 1,
		'seven' => 22,
		'three' => 32,
		'foure' => 5,
		'five' => 13,
		'six' => 37,
	];

	// найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
	var_dump(array_diff($secondArr, $firstArr));
	echo '<br>';

	// найти все элементы которые присутствую в первом и отсутствуют во втором
	var_dump(array_diff($firstArr, $secondArr));
	echo '<br>';

	// найти все элементы значения которых совпадают 
	var_dump(array_intersect($firstArr, $secondArr));
	echo '<br>';

	// найти все элементы значения которых отличается
	var_dump(array_merge(array_diff($firstArr, $secondArr), array_diff($secondArr, $firstArr)));
	echo '<br>';
	// or 
	var_dump(array_diff($firstArr, $secondArr) + array_diff($secondArr, $firstArr));
	echo '<br>';

	// TODO 3
	$firstArrx = [
		'one' => 1,
		'two' => [
			'one' => 1,
			'seven' => 22,
			'three' => 32,
		],
		'three' => [
			'one' => 1,
			'two' => 2,
		],
		'foure' => 5,
		'five' => [
			'three' => 32,
			'foure' => 5,
			'five' => 12,
		],  
	];

	// получить все вторые элементы вложенных массивов
	foreach ($firstArrx as $value) { 
    if (is_array($value)) { 
        $secondElement = array_slice($value, 1, 1);
        var_dump($secondElement);
    }
	}
	echo '<br>';

	// получить общее количество элементов в массиве
	var_dump(count($firstArrx, COUNT_RECURSIVE));
	echo '<br>';

	// получить сумму всех значений в массиве
	$sum = 0;
	foreach ($firstArrx as $value) {
		if (is_array($value)) {
			foreach ($value as $nestedValue) {
					$sum += $nestedValue;
			}
		} else {
			$sum += $value;
		}
	}

	var_dump($sum);
?>