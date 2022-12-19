<?php

$a = 30;
$b = 20;
$c = 50;
$d = 100;

$zogfol = function ($parameter1, $parameter2)
{
    $sum = $parameter1 + $parameter2;
    echo $sum;
    echo '<br />';
};
$zogfol($a, $b);

$biyogfol = function ($parameter1, $parameter2)
{
    $diff = $parameter1 - $parameter2;
    echo $diff;
    echo '<br />';
};
$biyogfol($b, $c);

$gunfol = function ($parameter1, $parameter2)
{
    $mul = $parameter1 * $parameter2;
    echo $mul;
    echo '<br />';
};

$vagfol = function ($parameter1, $parameter2)
{
    $div = $parameter1 / $parameter2;
    echo $div;
    echo '<br />';
};

$shotkora = function ($number, $rate)
{
    $multiplier = $rate / 100;
    $result = $number * $multiplier;
    echo $result;
    echo '<br />';
};

$power = function ($base, $top)
{
    $result = 1;
    for ($i=0; $i < $top; $i++) { 
        $result = $result * $base;
    }
    echo $result;
    echo '<br />';
};



$gunfol($c, $d);
$vagfol($d, $a);
$shotkora(1000, 10);
$power(9, 3);

// অ্যানোনিমাস ফাঙ্গশন / ক্লোজার দিয়ে ক্যালকুলেটর বানাতে হবে
// ( ডলার টু টাকা, কেজি টু গ্রাম, মিলিমিটার টু কিলোমিটার কনভার্টার)  