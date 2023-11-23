<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 1</title>
    
</head>
<body>
    <?php 
        include "../klasser/User.php";
        
        $user = new User();

        $user->first_name = "Ola";
        $user->last_name = "Nordmann";
        $user->user_name = "olanordmann";
        $user->birth_date = "01.01.2000";
        $user->registration_date = "16.11.2023";
    ?>
    <button onclick="history.back()">Tilbake</button>
    <h1>Oppgave 1</h1>

    <form method="post">
        <input type="submit" name="getName" value="Get Name method">
    </form>

    <form method="post">
        <input type="submit" name="getDetails" value="Get Details method">
    </form>

    <?php
        if(isset($_POST['getName'])) {
            echo $user->getName();
        }

        if(isset($_POST['getDetails'])) {
            User::getDetails($user);
        }
    ?>

</body>
</html>