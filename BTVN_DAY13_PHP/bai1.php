<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
$sum = 0;
$multiple = 1;
$minus = 2;
$divide = 3;
foreach($arrs AS $value) {
    $sum += $value;
    $multiple *= $value;
    $minus -= $value;
    $divide /= $value;
}
echo "Tổng các phần tử: $sum";
echo '<br>';
echo "Hiệu các phần tử: $minus";
echo '<br>';
echo "Tích các phần tử: $multiple";
echo '<br>';
echo "Thương của các phần tử: $divide";
?>