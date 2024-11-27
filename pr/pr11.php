<!----- <!DOCTYPE html>
<html>
<head>
<title>EvenorOddNumber Checker</title>
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
<h1>CheckEvenorOdd Number</h1>
<form method="post"onsubmit="returncheckNumber()">
<input type="number"id="number"name="number"required>
<input type="submit"value="Check">
</form>
<script>
function checkNumber(){
varnumber=document.getElementById("number").value; if (number % 2 == 0) {
alert(number+"isanEvennumber.");
}else{
alert(number+"isanOddnumber.");
}
returnfalse;//Preventformsubmission
}
</script>
</body>
</html>  ----->

<?php
// Input number
$number = 7;  // You can change this value to test with different numbers

// Check if the number is even or odd
if ($number % 2 == 0) {
    echo "$number is even.";
} else {
    echo "$number is odd.";
}
?>

