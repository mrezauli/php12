<?php

// $basket[0] = 'bangladesh' | $basket['sl#1'] = 'bangladesh' 
// $basket[1] = 987654321 | $basket['sl#2'] = 'bangladesh'
// $basket[2] = '???' | $basket['sl#3'] = 'bangladesh'
// $basket[3] = 1.23 | $basket['sl#4'] = 'bangladesh'
// $basket[4] = 'a' | $basket['sl#5'] = 'bangladesh'
// $basket[5] = 100 | $basket['sl#6'] = 'bangladesh'

// $basket = ['নেকটার', 'bangladesh', 987654321, '???', 1.23, 'a', 100];
$basket = [
    'sl1' => 'নেকটার',
    'kalam' => 'bangladesh',
    345 => 987654321,
    'আ' => '???'
];

foreach ($basket as $key => $value) {
    echo $key . " " . $value;
    echo '<br />';
}