<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2</title>
</head>
<body>
<a href="../index.php">Tilbake</a>

<?php
    if (isset($_POST["register"])) {
        require("../misc/dbcon.php");

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $user = array(
            "firstname" => $firstname,
            "lastname" => $lastname,
            "email" => $email,
            "phone" => $phone,
            "password" => $password
        );

        $sql = "INSERT INTO users (firstname, lastname, phone, email, password) 
                VALUES (:firstname, :lastname, :phone, :email, :password)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(":firstname", $firstname, PDO::PARAM_STR);
        $stmt->bindParam(":lastname", $lastname, PDO::PARAM_STR);
        $stmt->bindParam(":phone", $phone, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, PDO::PARAM_STR);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e -> getMessage() . $e->getMessage();
        }

        if ($pdo -> lastInsertId() > 0) {
            echo "Bruker ble lagret";
        } else {
            echo "Bruker ble ikke lagret";
        }
    }
    ?>
    <div>
        <form method="post" action="">
            <h2>Bruker registrering</h2>

            <div>
                <label for="firstname">Fornavn:</label>
                <input type="text" name="firstname" required>
            </div>

            <div>
                <label for="lastname">Etternavn:</label>
                <input type="text" name="lastname" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>

            <div>
                <label for="phone">Telefon:</label>
                <input type="text" name="phone" required>
            </div>

            <div>
                <label for="password">Passord:</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" name="register">Register</button>
        </form>
    </div>

    
</body>
</html>
