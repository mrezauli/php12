<?php

$a = 4;
$b = 'bangladesh';
$d = 400;
$c = $d;

// var_dump( $c);
// var_dump( is_string($c));

$slicedString = substr($b, 0, 6);
//var_dump($slicedString);

//var_dump(strlen($a));

$e = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium amet commodi ';
$search = 'it';
$replace = 'if';
//$f = str_replace($search, $replace, $e);
// var_dump($e);
// echo '<br />';
// var_dump($f);

$h = 'abc    
';
//var_dump($h);
//echo '<br />';
$g = trim($h);
//var_dump($g);

$i = 'Lorem ipsum dolor';
$search = 'm';
// var_dump(strpos($i, $search));
//var_dump(strstr($i, $search));

$j = 'ABCDE';
$k = 'abcde';
// var_dump($j);
// var_dump(strtolower($j));
// var_dump($k);
// var_dump(strtoupper($k));

$z = ' abcde ';
// var_dump($z);
// var_dump(trim($z));
// var_dump(ltrim($z));
// var_dump(rtrim($z));

$x = 'abcde';
$y = 'abcde';
$w = 'fghijklmopqr';
//var_dump(strcmp($w, $x));

$m = 'Lorem ipsum dolor. sit amet consectetur. adipisicing elit amar';
// var_dump( $m);
// echo '<br />';
// var_dump( explode('.', $m));

$n = ['i', 'am', 'a', 'boy'];
var_dump( $n);
echo '<br />';
var_dump( implode(' ', $n));

// ২। ইউজার যে প্যারাগ্রাফ দিবে, সে প্যারাগ্রাফ-এর বাক্যগুলো ভেংগে দেখাতে হবে