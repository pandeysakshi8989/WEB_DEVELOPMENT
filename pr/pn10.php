<?php
/* Write a PHP script to demonstrate symmetric encryption and decryption */
// Encryption function
function encrypt($data, $key) {
    // Generate a random initialization vector (IV) for encryption
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));

    // Encrypt the data using AES-256-CBC encryption method
    $encryptedData = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);

    // Return both the encrypted data and the IV (IV is required for decryption)
    return base64_encode($encryptedData . '::' . $iv);
}

// Decryption function
function decrypt($data, $key) {
    // Decode the data from base64
    list($encryptedData, $iv) = explode('::', base64_decode($data), 2);

    // Decrypt the data using AES-256-CBC decryption method
    return openssl_decrypt($encryptedData, 'aes-256-cbc', $key, 0, $iv);
}

// Example data to be encrypted
$data = "This is a secret message!";

// Secret key for symmetric encryption (it should be 32 bytes for AES-256)
$key = "12345678901234567890123456789012";  // 32 bytes key

// Encrypt the data
$encryptedData = encrypt($data, $key);
echo "Encrypted Data: " . $encryptedData . "\n";

// Decrypt the data
$decryptedData = decrypt($encryptedData, $key);
echo "Decrypted Data: " . $decryptedData . "\n";
?>
