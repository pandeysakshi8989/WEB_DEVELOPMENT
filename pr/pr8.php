<!DOCTYPE html>
<html>
<head>
<title>DoWhileLoopExample</title>
<style>
body{
font-family:Arial,sans-serif; text-align: center;
margin-top:50px;
}
.number{
font-size:24px; margin: 10px;
}
</style>
 
</head>
<body>
<h1>Numbersfrom1to 10</h1>
<?php
$count=1; do {
echo"<divclass='number'>$count</div>";
$count++;
}while($count<=10);
?>
</body>
</html>
