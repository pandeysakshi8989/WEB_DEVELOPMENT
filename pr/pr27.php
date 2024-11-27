<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>27.	WAP IN PHP TO VALIDATE AN EMAIL ADDRESS ENTERED BY USER

</h2>
</body>
</html>

<?php 
// PHP program to validate email 
// Function to validate email using regular expression 
function email_validation($str) { 
    return (!preg_match( 
    "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str)) 
    ? FALSE : TRUE; 
} 

// Function call 
if(!email_validation("author@phpprogram.com")) { 
    echo "Invalid email address."; 
} 
else { 
    echo "Valid email address."; 
} 
?> 