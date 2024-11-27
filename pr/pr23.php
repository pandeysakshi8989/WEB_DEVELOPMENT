<!----<!DOCTYPE html>
<html>
<head>
<title>PHP Calculator</title>
<style>
.calculator {
border: 1px solid #ccc; padding: 20px;
width: 200px; margin: 0 auto;
}
.calculator input[type="text"] { width: 100%;
margin-bottom: 10px; padding: 5px;
}
.calculator input[type="button"] { width: 48%;
padding: 5px; margin: 1%;
}
</style>
<script>
function calculate() {
var num1 = parseFloat(document.getElementById('num1').value);
 
var num2 = parseFloat(document.getElementById('num2').value); var operator = document.getElementById('operator').value;
var result;

if (operator === '+') { result = num1 + num2;
} else if (operator === '-') { result = num1 - num2;
} else if (operator === '*') { result = num1 * num2;
} else if (operator === '/') { result = num1 / num2;
}

document.getElementById('result').value = result;
}
</script>
</head>
<body>
<div class="calculator">
<h2>Simple Calculator</h2>
<form onsubmit="return false;">
<input type="text" id="num1" placeholder="Enter first number" required><br>
<input type="text" id="num2" placeholder="Enter second number" required><br>
<select id="operator" required>
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select><br><br>
<input type="button" value="Calculate" onclick="calculate()">
<input type="text" id="result" placeholder="Result" readonly><br>
</form>
</div>
</body>
</html> -->
 
<?php
// Function to perform calculation
function calculate($num1, $num2, $operator) {
    switch($operator) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 == 0) {
                return "Error! Division by zero.";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Invalid operator!";
    }
}

// Take user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = calculate($num1, $num2, $operator);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
</head>
<body>
    <h1>PHP Calculator</h1>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required><br><br>
        <input type="number" name="num2" placeholder="Enter second number" required><br><br>
        <select name="operator">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if (isset($result)) {
        echo "<h2>Result: $result</h2>";
    }
    ?>
</body>
</html>
