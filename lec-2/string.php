<?php
// strlen(): Returns the length of a string.
$string = "Hello, World!";
$length = strlen($string);
//echo $length;

// strtoupper(): Converts a string to uppercase.
// strtolower(): Converts a string to lowercase.
$string = "hello, world!";
$uppercase = strtoupper($string);
$lowercase = strtolower($string);
// capitalize first letter of each word
$caps = ucwords($string);
//echo $caps;
//echo $uppercase;
// str_replace(): Replaces all occurrences of a search string with a replacement string in a given string.
$string = "Hello, World!";
$newString = str_replace("World", "John", $string);
//echo $newString;

//strpos(): Returns the position of the first occurrence of a substring in a string.
$string = "Hello, World!";
$position = strpos($string, "World");
//echo $position;

// substr(): Returns a part of a string.
$string = "Hello, World!";
$substring = substr($string, 7, 5);
//echo $substring;

// trim(): Removes whitespace or other characters from both sides of a string .
$string = "   Hello, World!   ";
$trimmedString = trim($string);
//echo $trimmedString;

// explode(): Splits a string into an array of substrings based on a delimiter.
// implode(): Joins the elements of an array into a string using a specified delimiter.

$string = "apple banana orange";
$fruits = explode(" ", $string);

$fruits = array("apple", "banana", "orange");
$string = implode(", ", $fruits);
//print_r($fruits);
