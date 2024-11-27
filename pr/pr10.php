<!DOCTYPE html>
<html>
<head>
<title>ForeachLoopExample</title>
<style>
body{
font-family:Arial,sans-serif; text-align: center;
margin-top:50px;
}
.color{
font-size:24px;
 
margin:10px;
}
</style>
</head>
<body>
<h1>ListofColors</h1>
<?php
$colors=array("Red","Green","Blue","Yellow","Purple"); foreach ($colors as $color) {
echo"<divclass='color'>$color</div>";
}
?>
</body>
</html>
