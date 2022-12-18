<?php

$a = 30;
$b = 20;
$c = 50;
$d = 100;

zogfol($a, $b);
biyogfol($b, $c);
gunfol($c, $d);
vagfol($d, $a);
shotkora(1000, 10);
power(9, 3);

function zogfol($parameter1, $parameter2)
{
    $sum = $parameter1 + $parameter2;
    echo $sum;
    echo '<br />';
}

function biyogfol($parameter1, $parameter2)
{
    $diff = $parameter1 - $parameter2;
    echo $diff;
    echo '<br />';
}

function gunfol($parameter1, $parameter2)
{
    $mul = $parameter1 * $parameter2;
    echo $mul;
    echo '<br />';
}

function vagfol($parameter1, $parameter2)
{
    $div = $parameter1 / $parameter2;
    echo $div;
    echo '<br />';
}

function shotkora($number, $rate)
{
    $multiplier = $rate / 100;
    $result = $number * $multiplier;
    echo $result;
    echo '<br />';
}

function power($base, $top)
{
    $result = 1;
    for ($i=0; $i < $top; $i++) { 
        $result = $result * $base;
    }
    echo $result;
    echo '<br />';
}

// ফাঙ্গশন দিয়ে ক্যালকুলেটর বানাতে হবে (যোগ, বিয়োগ, ডলার টু টাকা, কেজি টু গ্রাম কনভার্টার)  