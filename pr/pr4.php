<!DOCTYPE html>
<html lang="en">
<head>
<metacharset="UTF-8">
<metaname="viewport"content="width=device-width,initial-scale=1.0">
<title>PHPOperators</title>
<style>
body{
display:flex;
flex-direction:column; align-items: center; justify-content:center; height: 150vh;
background-color: #f0f0f0; font-family:Arial,sans-serif;
}
.operator { margin: 10px; padding:10px;
border: 1px solid #ccc; background-color:#fff; width: 300px;
 
text-align:center;
}
</style>
</head>
<body>
<divclass="operator">
<h2>Addition</h2>
<?php
$a= 10;
$b =20;
$sum=$a+$b;
echo"$a +$b = $sum";
?>
</div>
<divclass="operator">
<h2>Subtraction</h2>
<?php
$sub=$a -$b;
echo"$a -$b =$sub";
?>
</div>
<divclass="operator">
<h2>Multiplication</h2>
<?php
$mul=$a* $b;
echo"$a *$b = $mul";
?>
</div>
<divclass="operator">
<h2>Division</h2>
<?php
$div=$a/$b;
echo"$a /$b= $div";
?>
</div>
<divclass="operator">
<h2>Modulus</h2>
<?php
$mod=$a%$b;
echo"$a %$b= $mod";
?>
</div>
 
</body>
</html>
