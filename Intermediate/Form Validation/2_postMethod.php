<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="2_postMethod.php" method="post">
        <label for="name">Username:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
    <?php 
    echo "<pre>";
    print_r(value: $_POST); 
    echo"</pre>"
    ?>
</body>
</html>