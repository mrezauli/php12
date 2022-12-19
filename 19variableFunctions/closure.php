<?php

$abc = 'balam';
//nactar($abc); //'balam'

function nactar($abc) //'balam'
{
    echo 'Hi! ' . $abc . ' Welcome to NACTAR'; //'balam'
    echo '<br />';
    $abc = 'john doe'; //'john doe'
    echo $abc; //'john doe'
    echo '<br />';
}

//echo $abc; //'balam'

$top = 'jane doe';
$nactar = function ($abc) {
    echo 'Hi! ' . $abc . ' Welcome to NACTAR';
};
$nactar($top);