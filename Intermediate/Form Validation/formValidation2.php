<?php
// Define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email is valid
        // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     $emailErr = "Invalid email format";
        // }
    }

    // Validate website
    if (empty($_POST["address"])) {
        $address = "Address is required"; // Optional field
    } else {
        $address = test_input($_POST["address"]);
        // Check if website URL is valid
        // if (!filter_var($website, FILTER_VALIDATE_URL)) {
        //     $websiteErr = "Invalid URL format";
        // }
    }

}

// Function to sanitize form input data
function test_input($data) {
    $data = trim($data);               // Remove whitespace
    $data = stripslashes($data);       // Remove slashes
    $data = htmlspecialchars($data);   // Convert special characters
    return $data;
}
?>
<h2>Form Validation</h2>
<p><span class="error">Required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>">
    <span class="error"><?php echo $nameErr; ?></span>

    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailErr; ?></span>

    <br><br>

    <label for="address">Address:</label>
    <textarea id="address" name="address"><?php echo $comment; ?></textarea>

    <br><br>

    <label for="gender">Gender:</label>
    <input type="radio" id="gender_male" name="gender" value="male" <?php if (isset($gender)&&$gender == "male") echo "checked"; ?>>
    <label for="gender_male">Male</label>
    <input type="radio" id="gender_female" name="gender" value="female" <?php if (isset($gender)&&$gender == "female") echo "checked"; ?>>
    <label for="gender_female">Female</label>
    <span class="error"><?php echo $genderErr; ?></span>

    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>
<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $address;
echo "<br>";
echo $gender;
?>