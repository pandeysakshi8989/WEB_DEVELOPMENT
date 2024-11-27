<?php

/* Write a PHp script that accepts an age input from user and throws a 
custom exception if the age is less than 18. Catch the exception 
and dsiplay an error message saying " Age  must be 18 or older " */


// Define a custom exception class
class AgeException extends Exception {
    // Custom message for the exception
    public function errorMessage() {
        return "Error: Age must be 18 or older.";
    }
}

// Initialize variables
$age = null;
$errorMessage = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the age from the form
    $age = $_POST['age'];

    try {
        // Check if the age is numeric
        if (!is_numeric($age)) {
            throw new Exception("Error: Please enter a valid number for age.");
        }

        // Throw an exception if age is less than 18
        if ($age < 18) {
            throw new AgeException(); // Custom exception is thrown
        } else {
            $errorMessage = "You are eligible, age is: $age.";
        }
    } catch (AgeException $e) {
        // Catch the custom exception
        $errorMessage = $e->errorMessage();
    } catch (Exception $e) {
        // Catch general exceptions (like invalid number input)
        $errorMessage = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Check</title>
</head>
<body>
    <h2>Enter Your Age</h2>
    
    <!-- Display error or success message -->
    <?php
    if ($errorMessage !== "") {
        echo "<p style='color: red;'>$errorMessage</p>";
    }
    ?>

    <!-- Form to input age -->
    <form action="pn7.php" method="POST">
        <label for="age">Age:</label>
        <input type="text" name="age" id="age" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
