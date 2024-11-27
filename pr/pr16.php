<!----<!DOCTYPE html>
<html>
<head>
<title>User-DefinedFunctionExample</title>
</head>
<body>
 
<h2>EnterYourName</h2>
<formonsubmit="returngreetUser()">
<label for="name">Name:</label>
<inputtype="text"id="name"name="name"required>
<inputtype="submit"value="Submit">
</form>

<script>
function greetUser(){
constname=document.getElementById("name").value; alert("Hello, " + name + "! Welcome to our website."); return false; // Prevent form submission
}
</script>
</body>
</html> --->

<?php
// User-defined function to calculate the sum of two numbers
function addNumbers($a, $b) {
    $sum = $a + $b;
    return $sum;
}

// Calling the function and storing the result
$result = addNumbers(5, 10);

// Displaying the result
echo "The sum of 5 and 10 is: " . $result . "<br>";
?>

<?php
// User-defined function without parameters
function greetUser() {
    echo "Hello, welcome to PHP!";
}

// Calling the function
greetUser(); // This will display the greeting message
?>
