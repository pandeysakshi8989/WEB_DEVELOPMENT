<?php

/* Write a PHP script to create a simple calculator that divides two numbers 
entered by the user. If the user tries to divide by zero, catch the exception
and display an error message */


// Initialize result variable and error message
$result = null;
$errorMessage = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the input values from the form
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    // Check if the input values are numeric
    if (is_numeric($number1) && is_numeric($number2)) {
        try {
            // Attempt to perform the division
            if ($number2 == 0) {
                throw new Exception("Error: Division by zero is not allowed.");
            } else {
                $result = $number1 / $number2;
            }
        } catch (Exception $e) {
            // Catch the exception and store the error message
            $errorMessage = $e->getMessage();
        }
    } else {
        $errorMessage = "Please enter valid numbers.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator with Exception Handling</title>
</head>
<body>
    <h2>Simple Division Calculator</h2>

    <!-- Display error message if there's any -->
    <?php
    if ($errorMessage !== "") {
        echo "<p style='color: red;'>$errorMessage</p>";
    } elseif ($result !== null) {
        echo "<h3>Result: $result</h3>";
    }
    ?>

    <!-- Calculator Form -->
    <form action="pn6.php" method="POST">
        <label for="number1">Number 1:</label>
        <input type="text" name="number1" id="number1" required><br><br>

        <label for="number2">Number 2:</label>
        <input type="text" name="number2" id="number2" required><br><br>

        <button type="submit">Divide</button>
    </form>
</body>
</html>
