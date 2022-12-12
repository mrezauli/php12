<?php

//echo 'hello world!';

$container;

$container = array(100, 'a', 'bangladesh', 123.456, 'আমাদের');
$value = 1.2;

//var_dump($container);

//var_dump( is_array(100) );

//var_dump( is_array($container) );

//var_dump( in_array('bangladesh', $container) );

//var_dump( in_array($value, $container) );

$one = [1, 2, 3];
$two = ['a', 'b', 'c'];
$three = array_merge($two, $one);
//var_dump($three);
$four = ['bangladesh'];
$five = array_merge($three, $four);
//var_dump($five);
//echo '<br />';
//var_dump(array_keys($five));

$basket = [
    'sl1' => 'নেকটার',
    'kalam' => 'bangladesh',
    345 => 987654321,
    'আ' => '???'
];
//var_dump(array_keys($basket));

$key = 'qaz';
//var_dump(array_key_exists($key , $basket));

//var_dump( $basket );
//echo '<br />';
$shiftedArray = array_shift($basket);
//var_dump( $shiftedArray );

$seven = [
    'sl1' => 'নেকটার',
    'kalam' => 'bangladesh',
    345 => 987654321,
    'আ' => '???'
];
$name = 'rezaul islam';
array_unshift($seven, $name);
//print_r($qaz);

$array = array(
    'websites' => array(
        'Search' => 'Google',
        'Social' => 'Facebook',
        'News' => 'NY Times'
    ),
    'friends' => array(
        'Chris',
        'Jim',
        'Lynn',
    ),
    'newfriend' => 'Ken'
);
//var_dump($array);
//echo '<br />';
array_unshift( $array, 'music');
//print_r ( $array );

$ten =  [1, 2, 3];
array_push($ten, 'bangla');
//var_dump( $ten );

$eleven = ['a', 'b', 'c'];
array_pop($eleven);
//var_dump( $eleven );

//var_dump( array_values($eleven));
//echo '<br />';
//var_dump( array_keys($eleven));

$tweleve = ['a', 'b', 'c', 'a', 'c', 1];

//var_dump(array_unique($tweleve));

var_dump($tweleve);
echo '<br />';
array_slice( $tweleve, 3);
var_dump($tweleve);