<?php

$a = 12124124412;

//var_dump(is_integer($a));

$b = '.';

//var_dump(gettype($b));

$c = '';
unset($c);

//print_r(isset($c));
var_dump(empty($c));
echo '<br />';
var_dump(isset($c));
echo '<br />';
var_dump(is_null($c));