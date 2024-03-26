<?php

// admin = 1, mod = 2, any other numbers

$permission = 3;

if ($permission === 1) {
	?><h1>Hello, Admin!</h1><?php
} else if ($permission === 2) {
	?><h1>Hello, mod</h1><?php
} else {
	?><h1>Hello, user</h1><?php
}