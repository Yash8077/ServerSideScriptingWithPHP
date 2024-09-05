<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php function helloWorld() {
    echo "Hello, world!";
}

helloWorld();
$users=["Manoj","Rahul","Raj"];
echo (is_array($users) ? "Yes, it is an array" : "No, it is not an array");
unset($users[2]);
print_r($users);
?>
</body>
</html>