<?php 

require_once 'Account.php';

$myAccount = new Account('Max', 45);

$myAccount->deposit(50)->deposit(30);


var_dump($myAccount);