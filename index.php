<?php 

function getNewName():string {
	$arrayOfLetters = range('A', 'Z');
	shuffle($arrayOfLetters);
	$num = mt_rand(100, 999);

	return "{$arrayOfLetters[0]}{$arrayOfLetters[1]}{$num}";
}

echo "Robot name: " . getNewName() . "<br>";