<?php 

function sum(int|float $a, int|float $b) {
	var_dump($a, $b);
	return $a + $b;
}

echo sum(b:2, a:5);