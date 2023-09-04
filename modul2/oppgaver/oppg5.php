<?php
function generateRandomPassword($length = 8) {
    $smallLetters = 'abcdefghijklmnopqrstuvwxyz';
    $capitalLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    
    $characters = $smallLetters . $capitalLetters . $numbers;
    $charactersLength = strlen($characters);
    
    $randomPassword = '';
    
    $randomPassword .= $capitalLetters[rand(0, strlen($capitalLetters) - 1)];
    $randomPassword .= $numbers[rand(0, strlen($numbers) - 1)];
    
    for ($i = 0; $i < $length - 2; $i++) {
        $randomPassword .= $characters[rand(0, $charactersLength - 1)];
    }
    
    $randomPassword = str_shuffle($randomPassword);
    
    return $randomPassword;
}

$randomPassword = generateRandomPassword();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Password Generator</title>
</head>
<body>
    <div>
    <button onclick="history.back()">Tilbake</button><br>

        <h1>Random Password Generator</h1>
        <p>Generated Password: <?php echo $randomPassword; ?></p>

        <button onClick="window.location.reload();">Click Here To Get New</button>

    </div>
</body>
</html>
