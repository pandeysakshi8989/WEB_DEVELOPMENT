<!---<!DOCTYPE html>
<html>
<head>
<title>Compound Interest Calculator</title>
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
 
function calculateCompoundInterest() {
var principal = parseFloat(document.getElementById('principal').value); var rate = parseFloat(document.getElementById('rate').value) / 100; var time = parseFloat(document.getElementById('time').value);
var frequency = parseFloat(document.getElementById('frequency').value);
var amount = principal * Math.pow((1 + rate / frequency), (frequency * time)); var interest = amount - principal;

document.getElementById('result').value = interest.toFixed(2);
}
</script>
</head>
<body>
<div class="calculator">
<h2>Compound Interest Calculator</h2>
<form onsubmit="return false;">
Principal Amount: <input type="number" id="principal" placeholder="Enter principal amount" required><br>
Rate of Interest: <input type="number" id="rate" placeholder="Enter rate of interest" required><br>
Time Period (years): <input type="number" id="time" placeholder="Enter time period in years" required><br>
Compounding Frequency (times per year): <input type="number" id="frequency" placeholder="Enter compounding frequency" required><br>
<input type="button" value="Calculate" onclick="calculateCompoundInterest()">
<input type="text" id="result" placeholder="Compound Interest" readonly><br>
</form>
</div>
</body>
</html>-->
 
<?php
// Function to calculate Compound Interest
function calculate_compound_interest($principal, $rate, $time, $compoundings) {
    return $principal * pow((1 + $rate / $compoundings), $compoundings * $time) - $principal;
}

// Take user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $principal = $_POST['principal'];
    $rate = $_POST['rate'] / 100;  // Convert percentage to decimal
    $time = $_POST['time'];
    $compoundings = $_POST['compoundings'];
    $interest = calculate_compound_interest($principal, $rate, $time, $compoundings);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compound Interest Calculator</title>
</head>
<body>
    <h1>Compound Interest Calculator</h1>
    <form method="post">
        <input type="number" name="principal" placeholder="Enter principal" required><br><br>
        <input type="number" name="rate" placeholder="Enter annual interest rate (%)" required><br><br>
        <input type="number" name="time" placeholder="Enter time in years" required><br><br>
        <input type="number" name="compoundings" placeholder="Enter number of compoundings per year" required><br><br>
        <input type="submit" value="Calculate Interest">
    </form>
    <?php
    if (isset($interest)) {
        echo "<h2>Compound Interest: $interest</h2>";
    }
    ?>
</body>
</html>
