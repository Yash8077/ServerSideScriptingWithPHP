<?php

$str="<h1>Hello World!</h1>";
$newstr = filter_var($str,FILTER_SANITIZE_STRING);
echo $newstr;
echo "<br>";

//Validate integer
$int=100;
if(!filter_var($int,FILTER_VALIDATE_INT) === false){
    echo ("Integer is valid");
}
else{
    echo("Integer is not valid");
}
echo "<br>";

// Sanitize URL
$url = "https://google.com";
$sanitized_url = filter_var($url, FILTER_SANITIZE_URL);
echo $sanitized_url;
echo "<br>";

// Validate URL
if (!filter_var($sanitized_url, FILTER_VALIDATE_URL) === false) {
    echo ("URL is valid");echo "<br>";
} else {
    echo ("URL is not valid");
}
echo "<br>";

// Sanitize email
$email = "example@domain.com";
$sanitized_email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $sanitized_email;
echo "<br>";

// Validate email
if (!filter_var($sanitized_email, FILTER_VALIDATE_EMAIL) === false) {
    echo ("Email is valid");
} else {
    echo ("Email is not valid");
}
echo "<br>";

// Validate IP address
$ip = "127.0.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo ("IP address is valid");
} else {
    echo ("IP address is not valid");
}
echo "<br>";