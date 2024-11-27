<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>31.	WAP IN PHP TO EXTRACT DOMAIN NAME FROM URL</h1>
</body>
</html>
<?php

$full_url = "http://google.com/search/console";

// 👇 parse the url and print the host part
$array = parse_url($full_url);
print $array["host"]; 