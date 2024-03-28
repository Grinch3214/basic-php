<?php 

$x = 5;

include 'example.php';

function foo() {
	global $x;

	echo $x;

	$x++;
}
foo();

echo $x;