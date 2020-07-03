<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$red = $arrs[0];
$blue = $arrs[1];
$orange = $arrs[2];
$white = $arrs[3];
$str = "Màu <span class='red'>$red</span> là màu yêu thích của Anh,
 <span class='red'>$white</span> là màu yêu thích của Sơn, 
 <span class='red'>$orange</span> là màu yêu thích của Thắng, 
 còn màu yêu thích của tôi là màu <span class='red'>$blue</span>";
echo $str;
?>
<style>
    .red {
        color: red;
    }
</style>
