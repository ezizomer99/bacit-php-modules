<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3</title>
</head>
<body>
<button onclick="history.back()">Tilbake</button><br>

    <?php 
        $email_a = "clinton@important.gov";
        $email_b = "bush@fakeemail";

        if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
            echo "Emailen $email_a er gyldig.\n";
        }
        
        echo "<br>";

        if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
            echo "Emailen $email_b er gyldig.\n";
        } else {
            echo "Emailen $email_b er ikke gyldig.\n";
        }
    ?>
</body>
</html>