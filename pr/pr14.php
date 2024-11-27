<!-----<!DOCTYPE html>
<html>
<head>
<title>StrongNumberChecker</title>
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
<h1>CheckStrongNumber</h1>
<formonsubmit="returncheckStrongNumber()">
<inputtype="number"id="number"name="number"required>
<inputtype="submit"value="Check">
</form>
<script>
function factorial(num){
if(num===0||num===1){ return 1;
}else{
returnnum*factorial(num-1);
}
}

function isStrongNumber(num){ let sum = 0;
let temp = num; while(temp>0){
let digit = temp % 10; sum+=factorial(digit);
temp=Math.floor(temp/10);
}
returnsum===num;
}

function checkStrongNumber() {
constnumber=parseInt(document.getElementById("number").value); if (isStrongNumber(number)) {
alert(number+" isaStrong number.");
}else{
alert(number+" isnotaStrongnumber.");
}
returnfalse;//Preventformsubmission
}
</script>
</body>
 
</html> --->

<?php
// Function to calculate factorial of a number
function factorial($n) {
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

// Function to check if a number is a Strong number
function isStrongNumber($number) {
    $sum = 0;
    $temp = $number;
    
    // Loop through each digit of the number
    while ($temp > 0) {
        // Get the last digit
        $digit = $temp % 10;
        
        // Add the factorial of the digit to the sum
        $sum += factorial($digit);
        
        // Remove the last digit from the number
        $temp = (int)($temp / 10);
    }
    
    // Check if the sum of the factorials of the digits is equal to the number
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}

// Input number
$number = 145;  // You can change this number to test

// Check if the number is a Strong number
if (isStrongNumber($number)) {
    echo "$number is a Strong number.";
} else {
    echo "$number is not a Strong number.";
}
?>
