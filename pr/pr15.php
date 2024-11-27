<!----<!DOCTYPE html>
<html>
<head>
<title>PalindromeNumberChecker</title>
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
<h1>CheckPalindromeNumber</h1>
<formonsubmit="returncheckPalindrome()">
<inputtype="number"id="number"name="number"required>
<inputtype="submit"value="Check">
</form>
<script>
function isPalindrome(number) { constoriginalNumber=number; let reversedNumber = 0;
 
while(number>0) {
constdigit=number% 10;
reversedNumber=reversedNumber*10+digit; number = Math.floor(number / 10);
}
returnoriginalNumber===reversedNumber;
}

function checkPalindrome(){
constnumber=parseInt(document.getElementById("number").value); if (isPalindrome(number)) {
alert(number+"isaPalindrome number.");
}else{
alert(number+"isnotaPalindrome number.");
}
returnfalse;//Preventformsubmission
}
</script>
</body>
</html> --->

<?php
// Function to check if a number is palindrome
function isPalindrome($number) {
    // Convert the number to a string
    $strNumber = (string)$number;
    
    // Reverse the string and compare it with the original
    if ($strNumber == strrev($strNumber)) {
        return true;  // The number is a palindrome
    } else {
        return false; // The number is not a palindrome
    }
}

// Input number
$number = 121;  // You can change this number to test

// Check if the number is a palindrome
if (isPalindrome($number)) {
    echo "$number is a palindrome.";
} else {
    echo "$number is not a palindrome.";
}
?>
