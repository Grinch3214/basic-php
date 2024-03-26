<?php

$names = ['John', 'Jane', 'Bob'];
print_r($names);

unset($names[1]);

$names = array_values($names);

print_r($names);