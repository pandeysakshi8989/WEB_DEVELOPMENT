<!----- <!DOCTYPE html>
<html>
<head>
<title>PrimeNumberChecker</title>
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
<h1>CheckPrimeNumber</h1>
<formonsubmit="returncheckPrime()">
<inputtype="number"id="number"name="number"required>
<inputtype="submit"value="Check">
</form>
<script>
function isPrime(number){ if (number <= 1) {
return false;
}
for(leti=2;i<=Math.sqrt(number);i++){ if (number % i === 0) {
return false;
}
}
returntrue;
}

function checkPrime(){
constnumber=document.getElementById("number").value; if (isPrime(number)) {
alert(number+" isaPrime number.");
}else{
alert(number+" isnotaPrimenumber.");
}
returnfalse;//Preventformsubmission
}
</script>
</body>
</html> ---->

<?php
// Function to check if a number is prime
function isPrime($number) {
    // Prime numbers are greater than 1
    if ($number <= 1) {
        return false;
    }
    
    // Check divisibility from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Divisible by another number, not prime
        }
    }
    
    return true; // Prime if no divisors found
}

// Input number
$number = 29;  // Change this value to test with other numbers

// Check if the number is prime
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
