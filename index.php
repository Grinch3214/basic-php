<?php 

function slices(string $series, int $size): array {
	if($size > strlen($series) || $size < 1) {
		return [];
	}
	$results = [];
	for($i = 0; $i <= strlen($series) - $size; $i++) {
		$results[] = substr($series, $i, $size);
	}
	return $results;
}

print_r(slices('49142', 3));