<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>30.	WAP IN PHP TO VALIDATE A PASSWORD MUST CONTAIN AT LEAST 8 CHARACTERS, ONE UPPERCASE LETTER, ONE LOWERCASE LETTER , ONE NUMBER AND ONE SPECIAL CHARACTER
</h1>
</body>
</html>
<?php

$password = "PhpProgram@123";

$pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';

if (preg_match($pattern, $password)) {
    echo "Valid Password";
} else {
    echo "Invalid Password";
}

?>