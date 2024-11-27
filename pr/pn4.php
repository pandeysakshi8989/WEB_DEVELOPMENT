<?php
/* Write a PHp script to create a simple calculator form with two fields 
for " Number1 " and  "Number2 " and a drop-down to select an operation 
(+, -, *, /) . when the form is submitted, display the result of the 
selected operation */

// Initialize result variable
$result = null;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the input values from the form
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];

    // Validate that inputs are numeric
    if (is_numeric($number1) && is_numeric($number2)) {
        // Perform the selected operation
        switch ($operation) {
            case '+':
                $result = $number1 + $number2;
                break;
            case '-':
                $result = $number1 - $number2;
                break;
            case '*':
                $result = $number1 * $number2;
                break;
            case '/':
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    $result = "Error: Division by zero.";
                }
                break;
            default:
                $result = "Invalid operation.";
                break;
        }
    } else {
        $result = "Please enter valid numbers.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form action="pn4.php" method="POST">
        <label for="number1">Number 1:</label>
        <input type="text" name="number1" id="number1" required><br><br>

        <label for="number2">Number 2:</label>
        <input type="text" name="number2" id="number2" required><br><br>

        <label for="operation">Operation:</label>
        <select name="operation" id="operation" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>

        <button type="submit">Calculate</button>
    </form>

    <?php
    // Display the result after form submission
    if ($result !== null) {
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
