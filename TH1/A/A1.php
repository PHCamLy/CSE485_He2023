<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

// Tính tổng các phần tử trong mảng
$totalSum = array_sum($arrs);

// Tính tích các phần tử trong mảng
$totalProduct = array_product($arrs);

// Tính hiệu các phần tử trong mảng
$totalDifference = $arrs[0];
foreach ($arrs as $key => $value) {
    if ($key !== 0) {
        $totalDifference -= $value;
    }
}

// Tính thương các phần tử trong mảng
$totalQuotient = $arrs[0];
foreach ($arrs as $key => $value) {
    if ($key !== 0) {
        $totalQuotient /= $value;
    }
}

// Hiển thị kết quả
echo "Tổng các phần tử = " . implode(' + ', $arrs) . " = " . $totalSum . PHP_EOL;
echo "Tích các phần tử = " . implode(' * ', $arrs) . " = " . $totalProduct . PHP_EOL;
echo "Hiệu các phần tử = " . implode(' - ', $arrs) . " = " . $totalDifference . PHP_EOL;
echo "Thương các phần tử = " . implode(' / ', $arrs) . " = " . $totalQuotient . PHP_EOL;
?>
