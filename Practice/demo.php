<?php

class Abc{
    public function mes()
    {
        return "abc";
    }
}
$abc = new Abc();
echo "lop : ".$abc->mes();

echo "<br>";
$string_1 = "Đay la vi du mot chuoi trong PHP";
echo $string_1;
//$x = 10;
//$y = 20;
//
//echo $x;
//echo "<br>";
//echo $y;
//echo "<br>";
//echo "Gia tri cua x: " . $x . " va Gia tri cua y: $y";
//function abc()
//{
//    return "abc";
//}
//echo "ham".abc();

echo "<br>";
$str = "hello everyone: \"my name is nguyen van luc\" ";
echo $str;

echo "<br>";
$string = 5;
$pattern = "/^[0-9]$/";
echo $pattern;
if (preg_match($pattern, $string)) {
    echo 'Khớp';
} else {
    echo 'Không khớp';
}

$subject = "Chào mừng bạn đến với CodeGym. CodeGym - Hệ thống đào tạo lập trình hiện đại.";
$pattern = '/CodeGym/';
print('<pre>');
preg_match($pattern, $subject, $matches);
print_r($matches);
print('</pre>');

$regexp = '/^[A-Z]/';


