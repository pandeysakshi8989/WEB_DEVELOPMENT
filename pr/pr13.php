<!---<!DOCTYPE html>
<html>
<head>
<title>FactorialCalculator</title>
<style>
body{
font-family:Arial,sans-serif; text-align: center;
margin-top:50px;
}
.result{
font-size:24px; margin: 10px;
}
</style>
</head>
<body>
<h1>FactorialCalculator</h1>
<formonsubmit="returncalculateFactorial()">
<inputtype="number"id="number"name="number"required>
<inputtype="submit"value="Calculate">
</form>
<script>
function factorial(number){ if (number <= 1) {
 
return1;
}else{
returnnumber*factorial(number-1);
}
}

function calculateFactorial(){
constnumber=document.getElementById("number").value; const result = factorial(number);
alert("Factorialof"+number+"is"+result); return false; // Prevent form submission
}
</script>
</body>
</html> --->

<?php
// Function to calculate factorial
function factorial($number) {
    $fact = 1;  // Start with 1 because factorial starts at 1

    // Multiply from 1 to the given number
    for ($i = 1; $i <= $number; $i++) {
        $fact *= $i; // Multiply the current result by i
    }
    
    return $fact;
}

// Input number
$number = 5;  // You can change this number to test

// Check if the number is non-negative
if ($number < 0) {
    echo "Factorial is not defined for negative numbers.";
} else {
    // Display the factorial of the number
    echo "The factorial of $number is " . factorial($number);
}
?>
