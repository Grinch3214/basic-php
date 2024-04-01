<?php 

require_once 'Account.php';

use App\Account;

$myAccount = new Account('John', 20);

$myAccount?->deposit(50)->deposit(30);


var_dump($myAccount);