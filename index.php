<?php
declare(strict_types=1);

$colors = [
	"black" => 0,
	"brown" => 1,
	"red" => 2,
	"orange" => 3,
	"yellow" => 4,
	"green" => 5,
	"blue" => 6,
	"violet" => 7,
	"grey" => 8,
	"white" => 9
];

function colorCode(array $colors ,string $color): int {
	return $colors[$color];
}

echo colorCode($colors, 'green');
echo "<br>";

function twoFer(string $name = "you"): string {
	return "One for {$name}, one for me.";
}

echo twoFer('John');
echo "<br>";

function isLeap(int $year): bool {
	if($year % 4 !== 0) {
		return false;
	}
	if($year % 100 === 0 && $year % 400 !== 0) {
		return false;
	}
	return true;
}

var_dump(isLeap(2024));