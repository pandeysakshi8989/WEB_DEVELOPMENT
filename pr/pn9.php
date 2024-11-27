<?php
/* Explain the difference between  the POST and GET methods in PHP and write a PHP script to demonstrate the use of both methods */

// Check if the form was submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect POST data
    $name = $_POST['name'];
    $age = $_POST['age'];
    echo "<h3>Form submitted using POST:</h3>";
    echo "Name: $name<br>";
    echo "Age: $age<br>";
}

// Check if the form was submitted using GET
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    // Collect GET data
    $search = $_GET['search'];
    echo "<h3>Search submitted using GET:</h3>";
    echo "Search term: $search<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST and GET Example</title>
</head>
<body>
    <h2>POST Method Example</h2>
    <form method="POST" action="">
        Name: <input type="text" name="name"><br>
        Age: <input type="text" name="age"><br>
        <input type="submit" value="Submit via POST">
    </form>

    <h2>GET Method Example</h2>
    <form method="GET" action="">
        Search: <input type="text" name="search">
        <input type="submit" value="Search via GET">
    </form>
</body>
</html>
