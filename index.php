<?php 

$multiplier = 2;

$multiply = function($num) use($multiplier) {
	$multiplier = 5;
	return $num * $multiplier;
};

// $multiply = fn($nun) => $num * $multiplier; // (arrow func)

function sum($a, $b, $callback) {
	return $callback($a + $b);
};


echo sum(5,2, $multiply) . "<br>";
echo $multiplier;