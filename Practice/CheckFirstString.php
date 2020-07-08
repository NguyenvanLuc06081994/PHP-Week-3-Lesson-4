<?php

//function isFirstLetterUpperCase($str){
//    $regexp = "/^[A-Z]/";
//    if (preg_match($regexp,$str)){
//        echo "String's first character is uppercase";
//    }else{
//        echo "String's first character is not uppercase";
//    }
//
//}
//isFirstLetterUpperCase('Codegyn la mot trung tam uy tin va chat luong');
//echo "<br>";
//isFirstLetterUpperCase('codegyn');
//
//echo "<br>";
//isFirstLetterUpperCase("Nguyen van Nam");
//echo "<br>";
//isFirstLetterUpperCase("NGUYEN VAN NAM");
//echo "<br>";
//isFirstLetterUpperCase("nguyen van Nam");

$str = "Chào mừng bạn đến với CodeGym. CodeGym - Hệ thống đào tạo lập trình hiện đại.";
$pattern = '/o$/';
print('<pre>');
preg_match_all($pattern, $str, $matches);
print_r($matches);
print('</pre>');