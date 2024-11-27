<!--<!DOCTYPE html>
<html>
<head>
<title>Simple Interest Calculator</title>
<style>
.calculator {
border: 1px solid #ccc; padding: 20px;
width: 300px; margin: 0 auto;
}
.calculator input[type="text"], .calculator input[type="number"] { width: 100%;
margin-bottom: 10px; padding: 5px;
}
.calculator input[type="button"] { width: 100%;
padding: 5px;
}
</style>
<script>
function calculateInterest() {
 
var principal = parseFloat(document.getElementById('principal').value); var rate = parseFloat(document.getElementById('rate').value);
var time = parseFloat(document.getElementById('time').value); var interest = (principal * rate * time) / 100;

document.getElementById('result').value = interest;
}
</script>
</head>
<body>
<div class="calculator">
<h2>Simple Interest Calculator</h2>
<form onsubmit="return false;">
Principal Amount: <input type="number" id="principal" placeholder="Enter principal amount" required><br>
Rate of Interest: <input type="number" id="rate" placeholder="Enter rate of interest" required><br>
Time Period (years): <input type="number" id="time" placeholder="Enter time period in years" required><br>
<input type="button" value="Calculate" onclick="calculateInterest()">
<input type="text" id="result" placeholder="Simple Interest" readonly><br>
</form>
</div>
</body>
</html>--->

<?php
// Function to calculate Simple Interest
function calculate_simple_interest($principal, $rate, $time) {
    return ($principal * $rate * $time) / 100;
}

// Take user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $principal = $_POST['principal'];
    $rate = $_POST['rate'];
    $time = $_POST['time'];
    $interest = calculate_simple_interest($principal, $rate, $time);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Interest Calculator</title>
</head>
<body>
    <h1>Simple Interest Calculator</h1>
    <form method="post">
        <input type="number" name="principal" placeholder="Enter principal" required><br><br>
        <input type="number" name="rate" placeholder="Enter rate" required><br><br>
        <input type="number" name="time" placeholder="Enter time in years" required><br><br>
        <input type="submit" value="Calculate Interest">
    </form>
    <?php
    if (isset($interest)) {
        echo "<h2>Simple Interest: $interest</h2>";
    }
    ?>
</body>
</html>
