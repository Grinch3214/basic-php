<?php 

function sum(bool $dumpArr, int|float ...$nums) {
	if($dumpArr) {
		var_dump($nums);
		return;
	}
	return array_sum($nums);
}

echo sum(false, 5, 2, 3, 8);
echo '<br>';
echo sum(true, 5, 2, 3, 8);