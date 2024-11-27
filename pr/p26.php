<?php
// Set the file path
$file = "example.txt";

// 1. Check if the file exists
if (!file_exists($file)) {
    echo "File does not exist.\n";
} else {
    echo "File exists.\n";
}

// 2. Reading from the file
echo "\nReading from the file:\n";
$fileHandle = fopen($file, "r"); // Open the file for reading
if ($fileHandle) {
    // Read the file content
    $fileContent = fread($fileHandle, filesize($file));
    echo $fileContent; // Output file content
    fclose($fileHandle); // Close the file handle
} else {
    echo "Error opening the file for reading.\n";
}

// 3. Writing to the file (overwrites the content)
$newContent = "This is new content written to the file.\n";
$fileHandle = fopen($file, "w"); // Open the file for writing (will overwrite)
if ($fileHandle) {
    fwrite($fileHandle, $newContent); // Write to the file
    echo "\nNew content written to the file.\n";
    fclose($fileHandle); // Close the file handle
} else {
    echo "Error opening the file for writing.\n";
}

// 4. Appending content to the file
$appendContent = "This content is appended to the file.\n";
$fileHandle = fopen($file, "a"); // Open the file for appending
if ($fileHandle) {
    fwrite($fileHandle, $appendContent); // Append to the file
    echo "\nAppended content to the file.\n";
    fclose($fileHandle); // Close the file handle
} else {
    echo "Error opening the file for appending.\n";
}

// 5. Deleting the file
if (unlink($file)) {
    echo "\nFile deleted successfully.\n";
} else {
    echo "\nError deleting the file.\n";
}
?>
