<?php
/* Write  a PHP script to create a basic login system using sessions */

session_start();  // Start the session

// Check if the user is already logged in, if so redirect to home page
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit;
}

// Define a simple hard-coded username and password for demonstration purposes
$validUsername = "user";
$validPassword = "password123";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the credentials are correct
    if ($username === $validUsername && $password === $validPassword) {
        // Set session variables
        $_SESSION['username'] = $username;
        // Redirect to home page
        header("Location: home.php");
        exit;
    } else {
        // Invalid credentials
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    
    <?php
    // Display error message if credentials are invalid
    if (isset($error)) {
        echo "<p style='color: red;'>$error</p>";
    }
    ?>

    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
