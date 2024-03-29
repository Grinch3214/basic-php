<?php 

function isAmstrongNumber(int $number):bool {
	$digits = str_split((string) $number);

	$digitCount = count($digits);

	$digits = array_map(function($digit) use($digitCount) {
		return $digit ** $digitCount;
	}, $digits);

	return array_sum($digits) === $number;
}

var_dump(isAmstrongNumber(56));