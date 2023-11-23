<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2</title>
</head>
<body>
    <h1>Registrering av bruker</h1>
    <button onclick="history.back()">Tilbake</button>

    <?php 
        //definerer variabler for bruker input og feilmeldinger
        $firstName = $lastName = $email = $phone = $password = "";
        $firstNameErr = $lastNameErr = $emailErr = $phoneErr = $passwordErr = "";

        function sanitizeInput($data) {
            $data = trim($data); //fjerner whitespace
            $data = stripslashes($data); //fjerner backslashes
            $data = htmlspecialchars($data); //fjerner html tags
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //sjekker om fornavn er fylt ut
            if (empty($_POST["firstName"])) {
                $firstNameErr = "Fornavn må fylles ut";
            } else {
                $firstName = sanitizeInput($_POST["firstName"]);
                //sjekker om fornavn kun inneholder bokstaver og mellomrom
                if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
                    $firstNameErr = "Kun bokstaver og mellomrom er tillatt";
                }
            }
        }

            //sjekker om etternavn er fylt ut
            if (empty($_POST["lastName"])) {
                $lastNameErr = "Etternavn må fylles ut";
            } else {
                $lastName = sanitizeInput($_POST["lastName"]);
                //sjekker om etternavn kun inneholder bokstaver og mellomrom
                if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
                    $lastNameErr = "Kun bokstaver og mellomrom er tillatt";
                }
            }

            //sjekker om epost er fylt ut
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            } else {
                $email = sanitizeInput($_POST["email"]);
            }

            //sjekker om telefonnummer er fylt ut
            if (empty($_POST["phone"])) {
                $phoneErr = "Telefonnummer må fylles ut";
            } else {
                $phone = sanitizeInput($_POST["phone"]);
                //sjekker om telefonnummer kun inneholder tall
                if (!preg_match("/^[0-9]*$/",$phone)) {
                    $phoneErr = "Kun tall er tillatt";
                }
            }

            //sjekker om passord er fylt ut
            if (empty($_POST["password"])) {
                $passwordErr = "Passord må fylles ut";
            } else {
                $password = sanitizeInput($_POST["password"]);
            }

            $registrationSuccess = false;

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Valideringskoden ...
            
                // Hvis alle feltene er gyldige, settes $registrationSuccess til true
                if (empty($firstNameErr) && empty($lastNameErr) && empty($emailErr) && empty($phoneErr) && empty($passwordErr)) {
                    $registrationSuccess = true;
            
                    // Utfør brukerregistrering eller andre handlinger her
                    // Du kan for eksempel lagre brukerdata i en database
            
                    // Eksempel på brukerregistrering i en tekstfil
                    $userData = "Fornavn: $firstName\n";
                    $userData .= "Etternavn: $lastName\n";
                    $userData .= "Email: $email\n";
                    $userData .= "Telefonnummer: $phone\n";
                    // Lagre brukerdata i en fil (du kan tilpasse dette til å lagre i en database)
                    file_put_contents("registered_users.txt", $userData, FILE_APPEND);
            
                    // Vis en bekreftelsesmelding
                    echo "<p>Registrering av bruker vellykket!</p>";
                    echo "<p>Fornavn: $firstName</p>";
                    echo "<p>Etternavn: $lastName</p>";
                    echo "<p>Email: $email</p>";
                    echo "<p>Telefonnummer: $phone</p>";
                }
            }
            
                    
    ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for="firstName">Fornavn:</label>
        <input type="text" name="firstName" id="firstName" value="<?php echo $firstName; ?>">
        <span class="error"><?php echo $firstNameErr; ?></span><br>

        <label for="lastName">Etternavn:</label>
        <input type="text" name="lastName" id="lastName" value="<?php echo $lastName; ?>">
        <span class="error"><?php echo $lastNameErr; ?></span><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span><br>

        <label for="phone">Telefon nummer:</label>
        <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>">
        <span class="error"><?php echo $phoneErr; ?></span><br>

        <label for="password">Passord:</label>
        <input type="password" name="password" id="password" value="<?php echo $password; ?>">
        <span class="error"><?php echo $passwordErr; ?></span><br>

        <input type="submit" value="Registrer">
</form>
</body>
</html>