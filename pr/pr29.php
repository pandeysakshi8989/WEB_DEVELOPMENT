<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>29.	WAP IN PHP TO CHECK IF A STRING IS A VALID URL OR NOT</h2>
</body>
</html>

<?php
$url = "https://www.w3schools.com";

if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}
?> 