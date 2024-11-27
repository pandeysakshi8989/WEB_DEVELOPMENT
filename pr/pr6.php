<!DOCTYPE html>
<html lang="en">
<head>
 
<metacharset="UTF-8">
<metaname="viewport"content="width=device-width,initial-scale=1.0">
<title>PHPSwitchStatement</title>
<style>
body{
display:flex;
flex-direction:column; align-items: center; justify-content:center; height: 100vh;
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
<h2>Day of the  Week</h2>
<?php
$day=date("l"); switch ($day) {
case"Monday":
echo"TodayisMonday.Startoftheworkweek!"; break;
case"Tuesday":
echo"TodayisTuesday.Keepgoing!"; break;
case"Wednesday":
echo"TodayisWednesday.Halfwaythrough!"; break;
case"Thursday":
echo"TodayisThursday.Almostthere!"; break;
case"Friday":
    echo"TodayisFriday.Weekendisnear!"; break;
    case"Saturday":
    echo"TodayisSaturday.Enjoyyourweekend!"; break;
    case"Sunday":
    echo"TodayisSunday.Relaxandrecharge!"; break;
    default:
    echo"Unknownday!"; break;
}
?>
</div>
</body>
</html>
 

 

