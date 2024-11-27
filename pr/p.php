<?php
// Define the encryption method
$method = 'AES-256-CBC';

// Generate a secure encryption key (32 bytes for AES-256)
$key = openssl_random_pseudo_bytes(32);

// Generate an initialization vector (IV) for the encryption (16 bytes for AES-256-CBC)
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));

// Sample data to encrypt
$data = "This is a secret message!";

// Encrypt the data
$encrypted = openssl_encrypt($data, $method, $key, 0, $iv);

// Decrypt the data
$decrypted = openssl_decrypt($encrypted, $method, $key, 0, $iv);

// Display the results
echo "<h1>Symmetric Encryption and Decryption Demo</h1>";
echo "<strong>Original Data:</strong> $data<br>";
echo "<strong>Encrypted Data:</strong> $encrypted<br>";
echo "<strong>Decrypted Data:</strong> $decrypted<br>";

// Optionally, display the key and IV for debugging
echo "<strong>Encryption Key (Base64 Encoded):</strong> " . base64_encode($key) . "<br>";
echo "<strong>Initialization Vector (Base64 Encoded):</strong> " . base64_encode($iv) . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Symmetric Encryption and Decryption</title>
</head>
<body>
    <h1>Encryption and Decryption Demo</h1>
    <p>This demo demonstrates symmetric encryption and decryption using PHP.</p>
</body>
</html>
