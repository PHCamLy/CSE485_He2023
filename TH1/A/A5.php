<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

// Lấy giá trị = 3 mà có key là 'b'
$valueB = $a['b']['o']['b'];
echo "Giá trị = {$valueB} mà có key là 'b' <br>";

// Lấy giá trị = 1 mà có key là 'c'
$valueC = $a['a']['c'];
echo "Giá trị = {$valueC} mà có key là 'c'<br>";

// Lấy thông tin của phần tử có key là 'a'
$elementA = $a['a'];
print_r($elementA);
?>
