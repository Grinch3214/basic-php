<?php 

$users = ['John', 'Jane', 'Max', 'Bob', null];

$users = array_merge(
	$users,
	['Sam', 'Greg']
);

asort($users);

echo "<pre>";
print_r($users);
echo "<pre>";