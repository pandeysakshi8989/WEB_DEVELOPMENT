<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WAP IN PHP TO MATCH AND COUNT THE NUMBER OF VOWELS IN ASTRING</h1>
</body>
</html>	
<?php
function countVowels($str)
{
    // Case-insensitive match for vowels
    preg_match_all("/[aeiou]/i", $str, $matches);
    return count($matches[0]);
}

// Driver code
$str = "GeeksforGeeks";
$vowelsCount = countVowels($str);

echo "Number of vowels: " . $vowelsCount;

?>