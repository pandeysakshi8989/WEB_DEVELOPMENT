<!DOCTYPE html>
<html lang="en">
<head>
<metacharset="UTF-8">
<metaname="viewport"content="width=device-width,initial-scale=1.0">
<title>PHPDataTypes</title>
<style>
 
body{
display:flex;
flex-direction:column; align-items: center; justify-content:center; height: 100vh;
background-color: #f0f0f0; font-family:Arial,sans-serif;
}
.datatype { margin: 10px; padding:10px;
border: 1px solid #ccc; background-color:#fff; width: 300px;
text-align:center;
}
</style>
</head>
<body>
<divclass="datatype">
<h2>String</h2>
<?php
$string="Hello,World!"; echo $string;
?>
</div>
<divclass="datatype">
<h2>Integer</h2>
<?php
$integer=123; echo $integer;
?>
</div>
<divclass="datatype">
<h2>Float</h2>
<?php
$float=3.14; echo $float;
?>
</div>
<divclass="datatype">
 
<h2>Boolean</h2>
<?php
$boolean= true;
echo$boolean?'True':'False';
?>
</div>
<divclass="datatype">
<h2>Array</h2>
<?php
$array=array("Apple","Banana","Cherry"); echo implode(", ", $array);
?>
</div>
<divclass="datatype">
<h2>Object</h2>
<?php
class Car {public$make;
public$model;
public function construct($make,$model){
$this->make=$make;
$this->model=$model;
}
}
$car = new Car("Toyota", "Corolla"); echo$car->make."".$car->model;
?>
</div>
</body>
</html>
 
