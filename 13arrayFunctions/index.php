<?php

$tweleve = ['a', 'b', 'c', 'd', 'e', 1];

$slicedTwelve = array_slice( $tweleve, 2, 2);
// var_dump($tweleve);
// echo '<br />';
// var_dump($slicedTwelve);

$thirteen = ['a', 'b', 'c', 'd', 'e', 'f'];
$fourteen = [1, 2, 3, 4, 5, 6];
//var_dump( array_diff($tweleve, $thirteen) );

$needle = 'c';
//var_dump(array_search($needle, $thirteen));

//var_dump(array_reverse($thirteen));
// var_dump( sizeof($thirteen));
// var_dump( count($thirteen));
var_dump( min($thirteen));