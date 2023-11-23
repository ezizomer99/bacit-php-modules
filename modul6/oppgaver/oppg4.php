<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4</title>
</head>
<body>
    
    <?php
        include "../klasser/Validate.php";

        $emailToValidate = "test@tester.no";
        $isValidEmail = Validate::validateEmail($emailToValidate);

        // Print out the result
        if ($isValidEmail) {
            echo "<p>The email '$emailToValidate' is valid.</p>";
        } else {
            echo "<p>The email '$emailToValidate' is not valid.</p>";
        }
    ?>
    
</body>
</html>