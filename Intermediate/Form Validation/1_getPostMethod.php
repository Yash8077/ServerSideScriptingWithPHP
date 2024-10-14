<!DOCTYPE html>
<html>
<head>
    <title>PHP with HTML</title>
</head>
<body>
    
    <h1>Welcome to PHP with HTML!</h1>
    
    <p>This is an example of how you can combine PHP with HTML in a single file.</p>
    <form action="1_getPostMethod.php" method="get">
        <label for="name">Username:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="pass">Password:</label>
        <input type="" id="pass" name="pass" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
    <?php 
    echo "<pre>";
    print_r(value: $_GET); 
    echo"</pre>"
    ?>
</body>
</html>