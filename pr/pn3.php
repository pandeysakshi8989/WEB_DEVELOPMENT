
<?php
/* Write a PHp script to create a form with fields for "First Name " and " Last Name " . 
When the form is submitted , display a greeting message that includes the user's first and last name */

// Check if the form is submitted via POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the first name and last name from the form
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    
    // Display the greeting message with the user's first and last name
    echo "<h2>Hello, $firstName $lastName! Welcome to our site.</h2>";
} else {
    // If the form is not submitted yet, show the form
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Greeting Form</title>
    </head>
    <body>
        <h2>Please enter your details:</h2>
        <form action="pn3.php" method="POST">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" required><br><br>

            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" required><br><br>

            <button type="submit">Submit</button>
        </form>
    </body>
    </html>
    <?php
}
?>

