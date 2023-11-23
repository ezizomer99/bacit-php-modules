<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Validation</title>
</head>
<body>
    
    <?php
        include "../klasser/Validate.php";

        // Example usage
        $passwordToValidate = "P@ssword123";
        $emailToValidate = "test@example.com";
        $phoneNumberToValidate = "+4712345678";

        // Validate password
        $isValidPassword = Validate::validateInput('password', $passwordToValidate);
        echo "<p>Password Validation: " . ($isValidPassword ? 'Valid' : 'Not Valid') . "</p>";

        // Validate email
        $isValidEmail = Validate::validateInput('email', $emailToValidate);
        echo "<p>Email Validation: " . ($isValidEmail ? 'Valid' : 'Not Valid') . "</p>";

        // Validate phone number
        $isValidPhoneNumber = Validate::validateInput('phone', $phoneNumberToValidate);
        echo "<p>Phone Number Validation: " . ($isValidPhoneNumber ? 'Valid' : 'Not Valid') . "</p>";
    ?>
    
</body>
</html>
