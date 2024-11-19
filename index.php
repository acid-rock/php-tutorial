<?php

// Basic Hello World
echo "Hello World!";
echo "<br />";

// Comments
// This is a comment
# This is also a comment

// Variables
$text = "ass";
$number = 404;
$bool = true;
$array = array("I", "hate", "PHP", "with", "every", "fiber", "of", "my", "being", ".");
$array2 = array("Brain", "not", "found");

echo "This shit is so ".$text;
echo "<br />";

// Data Types
// var_dump returns the data type of the argument.
var_dump($text);
echo "<br />";

var_dump($number);
echo "<br />";

var_dump($bool);
echo "<br />";

var_dump($array);
echo "<br />";

var_dump($array2);
echo "<br />";

// String methods
echo strlen($text);
echo "<br />";

echo strpos($text, "a");
echo "<br />";

echo str_replace("s", "h", $text);
echo "<br />";

// Constant variables
// define is "const" of php. Same thing applies, anything defined through "define" is immutable.
define("x", 30000);
echo x."<br/>";


// Operators (mostly the same with JavaScript)
echo ($number + 2)."<br/>";
echo ($number - 4)."<br/>";

// Conditionals (same with JavaScript, if, else, else if)
// Logical operators (or, and, same with JavaScript, also supports || &&)
if ($text == "ass" or $text == "ASS" || $text == "Ass") {
  echo "This shit is so ".$text;
  echo "<br />";
} else if ($text == "ahh") {
  echo "Pussy ".$text." nigga.";
  echo "<br />";
}