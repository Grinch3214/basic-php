<?php 

require_once 'Account.php';

$myAccount = null;

$myAccount?->deposit(50)->deposit(30);


var_dump($myAccount);