<?php
//array_combine(): Creates an array by using one array for keys and another for its values.
//Example:
$keys = ['name', 'age', 'email'];
$values = ['John Doe', 25, 'johndoe@example.com'];
$result = array_combine($keys, $values);
//print_r($result);

// array_merge(): Merges two or more arrays into a single array.
// Example:
$array1 = array('apple', 'banana');
$array2 = array('orange', 'grape');
$result = array_merge($array1, $array2);
//print_r($result);

// array_push(): Adds one or more elements to the end of an array.
// Example:
$fruits = array('apple', 'banana');
$new = ['orange', 'grape'];

array_push($fruits, ...$new);

//print_r($fruits);

//array_shift(): Removes and returns the first element of an array.
//array_pop(): Removes and returns the last element of an array.
//Example:
$fruits = array('apple', 'banana', 'orange');
//$removed = array_pop($fruits);
$removed = array_shift($fruits);
//print_r($fruits);

//array_unshift(): Adds one or more elements to the beginning of an array.
$fruits = array('banana', 'orange');
array_unshift($fruits, 'apple', 'grape');
//print_r($fruits);

//array_splice(): Removes and replaces specified elements of an array.
$fruits = array('apple', 'banana', 'orange', 'grape', 'kiwi');
$slice = array_slice($fruits, 1, 3);
//print_r($slice);

// array_splice(): Removes and replaces elements from an array and returns the removed elements.
$fruits = array('apple', 'banana', 'orange', 'grape', 'kiwi');
$removed = array_splice($fruits, -2, 1);
//print_r($removed);

//print_r($fruits);

// array_keys(): Returns all the keys of an array.
// array_values(): Returns all the values of an array.
$fruits = array('apple', 'banana', 'orange');
$keys = array_keys($fruits);
$values = array_values($fruits);
//print_r($keys);
