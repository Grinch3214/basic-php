<?php

declare(strict_types=1);

$paymentStatus = 2;

function getStatus(int|float $pay, bool $showMessage = false) : ?string {
	$message = match($pay) {
		1 => 'Success',
		2 => 'Error',
		default => 'Unknown'
	};

	if ($showMessage) {
		return null;
	}

	return $message;
}

$statusMessage = getStatus($paymentStatus);
var_dump($statusMessage);


echo '<br>';

?>