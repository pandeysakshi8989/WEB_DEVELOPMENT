<!---<!DOCTYPE html>
<html>
<head>
<title>PHP File Handling Example</title>
<style>
.file-handler {
border: 1px solid #ccc; padding: 20px;
width: 300px; margin: 0 auto;
}
.file-handler input[type="text"], .file-handler input[type="file"] { width: 100%;
margin-bottom: 10px; padding: 5px;
}
.file-handler input[type="button"] {
 
width: 100%; padding: 5px;
}
</style>
<script>
function readFile() {
var fileInput = document.getElementById('fileInput'); var file = fileInput.files[0];
var reader = new FileReader();

reader.onload = function(e) { document.getElementById('fileContent').value = e.target.result;
};

reader.readAsText(file);
}
</script>
</head>
<body>
<div class="file-handler">
<h2>File Handling Example</h2>
<form onsubmit="return false;">
Select File: <input type="file" id="fileInput" required><br>
<input type="button" value="Read File" onclick="readFile()">
<textarea id="fileContent" placeholder="File content will appear here" readonly></textarea><br>
</form>
</div>
</body>
</html>-->
 
<?php
// Writing to a file
$file = fopen("example.txt", "w"); // Open file for writing
if ($file) {
    fwrite($file, "Hello, this is a file handling demo in PHP.\n");
    fwrite($file, "This file was created and written using PHP.");
    fclose($file);  // Close the file
    echo "Data has been written to the file.<br>";
}

// Reading from the file
$file = fopen("example.txt", "r"); // Open file for reading
if ($file) {
    echo "<h2>Contents of the file:</h2>";
    while (($line = fgets($file)) !== false) {
        echo nl2br($line); // nl2br() converts newlines to HTML <br> tags
    }
    fclose($file);  // Close the file
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP File Handling Demo</title>
</head>
<body>
    <h1>PHP File Handling</h1>
    <p>Check the example.txt file for written content and the browser for the file's output.</p>
</body>
</html>
