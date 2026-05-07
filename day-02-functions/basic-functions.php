<?php
// Basic string Functions in PHP
// String Functions
$string = "Hello, World!";
echo strlen($string); // Length of the string
echo "<br>";

echo str_word_count($string); // Number of words in the string
echo "<br>";

echo strrev($string); // Reverse the string
echo "<br>";

echo strpos($string, "World"); // Position of the word "World"
echo "<br>";    

echo str_replace("World", "PHP", $string); // Replace "World" with "PHP"
echo "<br>";


// Basic Numaric Functions in PHP


$num = 23445;
$float = 43.54;
$string = "232445";

var_dump(is_int($num)); // Check if it's an integer
echo "<br>";

var_dump(is_float($float)); // Check if it's a float
echo "<br>";

var_dump(is_numeric($string)); // Check if it's numeric
echo "<br>";

$int_cast = (int)$float; // Cast float to integer
echo $int_cast; // Output: 43
echo "<br>";
$int_cast = (int)$string; // Cast string to integer
echo $int_cast; // Output: 232445
echo "<br>";


?>