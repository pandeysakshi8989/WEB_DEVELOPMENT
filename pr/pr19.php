<!---<!DOCTYPE html>
<html>
<head>
<title>StringFunctionsExample</title>
<style>
body{
font-family:Arial,sans-serif; text-align: center;
margin-top:50px;
}
</style>
</head>
<body>
<h2>StringFunctionsExample</h2>
<formonsubmit="returnhandleFormSubmit(event)">
<labelfor="inputString">EnteraString:</label>
<inputtype="text"id="inputString"name="inputString"required>
<inputtype="submit"name="strlen"value="StringLength">
<inputtype="submit"name="strrev"value="ReverseString">
<inputtype="submit"name="strtoupper"value="UppercaseString">
 
</form>

<script>
function handleFormSubmit(event) { event.preventDefault();//Preventformsubmission

constinputString=document.getElementById("inputString").value; const action = event.submitter.name;
letresult;

if(action==="strlen"){
result="Lengthofthestring:"+inputString.length;
}else if(action==="strrev") {
result="Reversedstring:"+inputString.split('').reverse().join('');
}else if(action==="strtoupper") {
result="Uppercasestring:" +inputString.toUpperCase();
}

alert(result);
}
</script>
</body>
</html> --->

<?php
// Original string for demonstration
$string = "Hello, PHP String Functions!";

// 1. strlen() - Get the length of a string
echo "Length of string: " . strlen($string) . "<br>";

// 2. strtoupper() - Convert string to uppercase
echo "Uppercase string: " . strtoupper($string) . "<br>";

// 3. strtolower() - Convert string to lowercase
echo "Lowercase string: " . strtolower($string) . "<br>";

// 4. ucfirst() - Convert the first character of the string to uppercase
echo "First letter uppercase: " . ucfirst($string) . "<br>";

// 5. ucwords() - Convert the first character of each word to uppercase
echo "Each word capitalized: " . ucwords($string) . "<br>";

// 6. substr() - Extract a part of the string
echo "Substring (7 to 11): " . substr($string, 7, 5) . "<br>";

// 7. strrev() - Reverse the string
echo "Reversed string: " . strrev($string) . "<br>";

// 8. strpos() - Find the position of the first occurrence of a substring
echo "Position of 'PHP': " . strpos($string, "PHP") . "<br>";

// 9. str_replace() - Replace all occurrences of a substring with another substring
echo "Replace 'PHP' with 'Java': " . str_replace("PHP", "Java", $string) . "<br>";

// 10. trim() - Remove whitespace (or other characters) from the beginning and end of a string
echo "Trimmed string (spaces removed): '" . trim("   Hello World!   ") . "'<br>";
?>
