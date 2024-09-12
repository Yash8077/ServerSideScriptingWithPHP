<?php

// Your PHP code goes here
$company="javatpoint";
echo "Welcome to company\n";
echo "<br>";
echo "Welcome to $company\n";
//
echo "HELLO<br>";
const WISHES="GOOD DAY!<br>"; //method 1
echo WISHES;
echo constant("WISHES"); //method 2
define("WISHESS","GOOD day");//method 3
echo WISHESS;
echo "<br>";
$a = "Welcome to LPU";
echo gettype($a);
echo "<br>";
echo strlen($a);
echo "<br>";
$b="Welcome to IMS , Gzb";
echo str_word_count((string)$b);

?>