<?php

// admin = 1, mod = 2, any other numbers

function getPermission() {
	sleep(2);

	return 2;
}

$permission = getPermission();

switch ($permission) {
	case 1: 
		echo "<h1>Hello admin</h1>";
		break;
	case 2:
		echo "<h1>Hello mod</h1>";
		break;
	default:
		echo "<h1>Hello user</h1>";
}