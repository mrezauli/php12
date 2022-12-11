<?php

$basket = [
    '1d1' => [
        '2d1' => [
            345 => 987654321,
            'আ' => '???'
        ],
        '2d2' => [
            'sl1' => 'নেকটার',
            'kalam' => 'bangladesh'
        ]
    ],
    '1d2' => [
        '2d3' => [
            345 => 987654321,
            'আ' => '???'
        ],
        '2d4' => [
            'sl1' => 'নেকটার',
            'kalam' => 'bangladesh'
        ]
    ]
];

// foreach ($basket as $key => $value) { // 1st dimension array
//     echo $key . " "; 
//     foreach ($value as $k2 => $v2) { // 2nd dimension array
//         echo $k2 . " ";
//         foreach ($v2 as $k3 => $v3) { // 3rd dimension array
//             echo '>' . $v3;
//             echo '<br />';
//         }
//     }

//     echo '<br />';
// }

$students = [
    'class 7' => [
        'name' => 'abc',
        'roll' => 20
    ],
    'class 10' => [
        'name' => 'qwe',
        'roll' => 40
    ],
];

foreach ($students as $class => $value) {
    echo $class . '';
    foreach ($value as $property => $data) {
        echo $property . ':' . $data;
        echo '<br />';
    }
}