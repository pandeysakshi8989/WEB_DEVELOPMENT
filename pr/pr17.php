<!---<!DOCTYPE html>
<html>
<head>
<title>SetandUnsetExample</title>
</head>
<body>
<h2>SetandUnsetSessionVariables</h2>
<formonsubmit="returnhandleFormSubmit(event)">
<label for="name">Name:</label>
<inputtype="text"id="name"name="name"required>
<inputtype="submit"name="set"value="Set">
 
<inputtype="submit"name="unset"value="Unset">
</form>

<script>
function handleFormSubmit(event) { event.preventDefault();//Preventformsubmission

constname=document.getElementById("name").value; const action = event.submitter.name;

if(action==="set"){
alert("Sessionvariable'name'issetto:"+name);
} else if (action === "unset") {alert("Sessionvariable'name'isunset.");
}
}
</script>
</body>
</html> -->

<?php
// Declaring a variable
$name = "John";

// Display the variable value
echo "Name before unset: " . $name . "<br>";

// Unset the variable
unset($name);

// Try to display the variable after unset
if (isset($name)) {
    echo "Name after unset: " . $name . "<br>";
} else {
    echo "Name has been unset and no longer exists.";
}
?>

<?php
// Start the session
session_start();

// Set a session variable
$_SESSION['username'] = "Alice";

// Display session variable value
echo "Session username is: " . $_SESSION['username'] . "<br>";

// Unset the session variable
unset($_SESSION['username']);

// Try to access the session variable after unset
if (isset($_SESSION['username'])) {
    echo "Session username is: " . $_SESSION['username'];
} else {
    echo "Session username has been unset.";
}
?>
