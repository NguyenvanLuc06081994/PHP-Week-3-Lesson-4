<?php
//$str = "as my time";
//echo strlen($str);
//echo "<br>";
//echo str_word_count($str);
//echo "<br>";
//echo strrev($str);
//echo "<br>";
//var_dump(strpos($str, "m"));
//var_dump(strpos($str, "u"));
//
//echo "<br>";
//echo str_replace("time", "money", $str);
//echo "<br>";
//echo strtoupper($str);
//echo "<br>";
//echo strtolower($str);
//echo "<br>";
//echo trim($str, "ase");..

$text   = "           ------This is a test -- string :) ...     ";
$hello  = "Hello World";
var_dump($text);
echo "<br />";
var_dump($hello);
echo "<br />";

$trimmed = trim($text);
$trimmed1 = trim($hello);
var_dump($trimmed);
echo "<br />";
var_dump($trimmed1);
echo "<br />";

//$trimmed = trim($text, " -.");
//var_dump($trimmed);
//echo "<br />";
//
//$trimmed = trim($hello, "Hdle");
//var_dump($trimmed);
//echo "<br />";
//
//$trimmed = trim($hello, 'HdWr');
//var_dump($trimmed);
//echo "<br />";