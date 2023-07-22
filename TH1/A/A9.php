<?php 
function convertToLowerCase($arr) {
    return array_map('strtolower', $arr);
}

$arrs = ['a', 'B', 'C', 'E'];
$result = convertToLowerCase($arrs);
print_r($result);

$arrs = ['1', 'B', 'C', 'E'];
$result = convertToLowerCase($arrs);
print_r($result);

$arrs = ['a', 0, null, false];
$result = convertToLowerCase($arrs);
print_r($result);
