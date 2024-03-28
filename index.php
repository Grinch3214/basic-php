<?php 

$myCup = 'empty';
$myFriendsCup = 'empty';

function fillCup(&$cupParam) {
	$cupParam = 'filled';
}

fillCup($myCup);
fillCup($myFriendsCup);

echo $myCup . "<br>";
echo $myFriendsCup;