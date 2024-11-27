<!---<!DOCTYPE html>
 
<html>
<head>
<title>ReverseStringExample</title>
</head>
<body>
<h2>ReverseaString</h2>
<formonsubmit="returnhandleFormSubmit(event)">
<labelfor="inputString">EnteraString:</label>
<inputtype="text"id="inputString"name="inputString"required>
<inputtype="submit"name="simpleReverse"value="SimpleReverse">
<inputtype="submit"name="paramReverse"value="ParameterizedReverse">
</form>

<script>
function simpleReverse(str){
returnstr.split('').reverse().join('');
}

function paramReverse(str){ let reversed = '';
for(leti=str.length-1;i>=0;i--){ reversed += str[i];
}
returnreversed;
}

function handleFormSubmit(event) { event.preventDefault();//Preventformsubmission

constinputString=document.getElementById("inputString").value; const action = event.submitter.name;
letresult;

if (action === "simpleReverse") {result=simpleReverse(inputString);
alert("ReversedString(SimpleFunction):"+ result);
}else if(action==="paramReverse"){ result=paramReverse(inputString);
alert("ReversedString(ParameterizedFunction):"+result);
}
}
</script>
 
</body>
</html> -->

<?php
// Simple function to reverse a fixed string
function reverse_String() {
    $str = "Hello, PHP!";  // Fixed string
    $reversedStr = strrev($str);  // Use PHP's built-in strrev() function
    echo "Original String: " . $str . "<br>";
    echo "Reversed String: " . $reversedStr . "<br>";
}

// Call the function to reverse the string
reverse_String();
?>

<?php
// Parameterized function to reverse a string
function reverseString($str) {
    $reversedStr = strrev($str);  // Use PHP's built-in strrev() function
    return $reversedStr;
}

// Input string
$inputString = "Welcome to PHP!";

// Call the function and pass the string as an argument
$reversedString = reverseString($inputString);

// Display the results
echo "Original String: " . $inputString . "<br>";
echo "Reversed String: " . $reversedString . "<br>";
?>
