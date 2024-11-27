<!DOCTYPE html>
<html lang="en">
<head>
<metacharset="UTF-8">
<metaname="viewport"content="width=device-width,initial-scale=1.0">
<title>PHPIfElseStatement</title>
<style>
body{
display:flex;
flex-direction:column; align-items: center; justify-content:center;
 
height:100vh;
background-color: #f0f0f0; font-family:Arial,sans-serif;
}
.result{
margin: 10px; padding: 10px;border:1pxsolid#ccc;
background-color:#fff; width: 300px;
text-align:center;
}
</style>
</head>
<body>
<divclass="result">
<h2>CheckNumber</h2>
<?php
$number=10;
 if ($number > 0) {
echo"$number is a positive number.";
}elseif($number<0) {
echo"$numberis a negative number.";
}else{
echo"$numberis zero.";
}
?>
</div>
</body>
</html>
