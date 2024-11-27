<?php
/* Write a PHP script to upload an image file, validate its type and display it on the page*/

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Define allowed file types
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $uploadDir = 'uploads/';  // Directory to store uploaded images

    // Check if the upload directory exists, if not, create it
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Get file info
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileType = $_FILES['image']['type'];
    $fileError = $_FILES['image']['error'];

    // Check for errors
    if ($fileError !== UPLOAD_ERR_OK) {
        echo "Error during file upload.";
        exit;
    }

    // Validate file type
    if (!in_array($fileType, $allowedTypes)) {
        echo "Invalid file type. Only JPG, PNG, and GIF are allowed.";
        exit;
    }

    // Generate a unique name for the uploaded file
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    $uniqueFileName = uniqid('img_', true) . '.' . $fileExtension;

    // Move uploaded file to the designated folder
    if (move_uploaded_file($fileTmpName, $uploadDir . $uniqueFileName)) {
        // File uploaded successfully
        echo "File uploaded successfully. <br>";
        echo "Image preview: <br>";
        echo "<img src='" . $uploadDir . $uniqueFileName . "' alt='Uploaded Image' width='300px' />";
    } else {
        echo "Error moving the uploaded file.";
    }
} else {
    // Display the image upload form
    echo '<form action="" method="POST" enctype="multipart/form-data">
            <label for="image">Choose an image to upload:</label>
            <input type="file" name="image" id="image" required>
            <button type="submit">Upload</button>
          </form>';
}
?>
