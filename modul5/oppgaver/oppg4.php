<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4</title>
</head>
<body>
    <!-- Form for encryption -->
<h1>Encryption</h1>
    <form method="post">
        <label for="text">Enter Text to Encrypt:</label>
        <input type="text" name="text" id="text" required>
        <input type="submit" name="encrypt" value="Encrypt">
    </form>

    <!-- Form for decryption -->
    <h1>Decryption</h1>
    <p>Copy the encrypted text and paste into the decryption form</p>
    <form method="post">
        <label for="encryptedText">Enter Encrypted Text to Decrypt:</label>
        <input type="text" name="encryptedText" id="encryptedText" required>
        <input type="submit" name="decrypt" value="Decrypt">
    </form>

<?php

// Encryption function
function customEncrypt($text, $key) {
    $encrypted = '';
    $keyLength = strlen($key);
    
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        $keyChar = $key[$i % $keyLength];
        $encrypted .= chr(ord($char) + ord($keyChar));
    }
    
    return base64_encode($encrypted);
}

// Decryption function
function customDecrypt($encryptedText, $key) {
    $encryptedText = base64_decode($encryptedText); // // Decode the encrypted text from base64 back to its original binary representation.
    $decrypted = '';
    $keyLength = strlen($key); // Get the length of the key
    
    for ($i = 0; $i < strlen($encryptedText); $i++) {
        $char = $encryptedText[$i]; 
        $keyChar = $key[$i % $keyLength];  // Retrieve the corresponding character from the decryption key based on the current position.
        $decrypted .= chr(ord($char) - ord($keyChar));   // Decrypt the character by subtracting the ASCII values of the character and the key character.
    }
    
    return $decrypted;
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if encryption form is submitted
    if (isset($_POST['encrypt'])) {
        // Encryption form
        $text = $_POST['text'];
        $key = "MySecretKey";
        // Encrypt the text
        $encrypted = customEncrypt($text, $key);
        echo "Encrypted Text: $encrypted";
        // Check if decryption form is submitted
    } elseif (isset($_POST['decrypt'])) {
        // Decryption form
        $encryptedText = $_POST['encryptedText'];
        $key = "MySecretKey";
        // Decrypt the encrypted text
        $decrypted = customDecrypt($encryptedText, $key);
        echo "Decrypted Text: $decrypted";
    }
}
?>
</html>