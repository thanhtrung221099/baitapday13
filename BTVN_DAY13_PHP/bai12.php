<?php
$number = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];
// phần tử đầu và cuối của mảng
echo reset($number)." Là tử đầu tiên của mảng <br>";
print_r(array_pop($number)); echo " Là phần tử cuối cùng của màng <br>";

// tìm giá trị min max các phần tử
$max = max($number);
$min = min($number);
echo "Giá trị lớn nhất: ".$max."<br>";
echo "Giá trị nhỏ nhất: ".$min."<br>";

// tính tổng các phần tử
$sum=0;
foreach($number AS $value) {
    $sum += $value;
}
echo "Tổng các phần tử: $sum";
echo '<br>';

// sắp xếp mảng tăng giảm theo giá trị
sort($number);

foreach( $number as $n) {
    echo "Mảng theo chiều tăng dần là: $n <br>";
}
rsort($number);

foreach( $number as $n) {
    echo "Mảnh theo chiều giảm dần là: $n <br>";
}

// sắp xếp mảng theo key
ksort($number);

foreach($number as $x => $x_value) {
    echo "Gía trị tăng dần theo : ";
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}

krsort($number);

foreach($number as $x => $x_value) {
    echo "Gía trị giảm dần theo ";
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}
?>