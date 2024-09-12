<?php

// Arithmetic operators
$a = 10;
$b = 5;

$sum = $a + $b; // Addition
$diff = $a - $b; // Subtraction
$prod = $a * $b; // Multiplication
$quot = $a / $b; // Division
$mod = $a % $b; // Modulus

// Assignment operators
$x = 10;
$y = 5;

$x += $y; // Equivalent to: $x = $x + $y;
$x -= $y; // Equivalent to: $x = $x - $y;
$x *= $y; // Equivalent to: $x = $x * $y;
$x /= $y; // Equivalent to: $x = $x / $y;
$x %= $y; // Equivalent to: $x = $x % $y;

// Comparison operators
$p = 10;
$q = 5;

var_dump($p == $q); // Equal to
var_dump($p != $q); // Not equal to
var_dump($p > $q); // Greater than
var_dump($p < $q); // Less than
var_dump($p >= $q); // Greater than or equal to
var_dump($p <= $q); // Less than or equal to

// Logical operators
$bool1 = true;
$bool2 = false;

var_dump($bool1 && $bool2); // Logical AND
var_dump($bool1 || $bool2); // Logical OR
var_dump(!$bool1); // Logical NOT

// String operators
$str1 = "Hello";
$str2 = "World";

$concatenated = $str1 . $str2; // Concatenation
$condition = true;
$result = $condition ? "Condition is true" : "Condition is false";
?>