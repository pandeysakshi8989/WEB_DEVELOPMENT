<?php
/* Write  a PHp script to create a user registration form with fields for 
" Username ", "Password ", " Confirm Password ". 
When the form is submitted , check that the password and confirm password match.
If they match , display a success message, otherwise display an error  */


// Initialize the result message
$message = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form values
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Check if password and confirm password match
    if ($password === $confirmPassword) {
        // Passwords match, display success message
        $message = "Registration successful! Welcome, $username.";
    } else {
        // Passwords don't match, display error message
        $message = "Error: Password and Confirm Password do not match.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    
    <!-- Display message after form submission -->
    <?php
    if ($message !== "") {
        echo "<p style='color: " . (strpos($message, "Error") === false ? "green" : "red") . ";'>$message</p>";
    }
    ?>

    <!-- Registration Form -->
    <form action="pn5.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" id="confirm_password" required><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
