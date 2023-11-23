<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2</title>
</head>
<body>
    <button onclick="history.back()">Tilbake</button>

    <?php
        include "../klasser/Tutor.php";

        $user = new User();
        $tutor = new Tutor();

        $user->first_name = "Ola";
        $user->last_name = "Nordmann";
        $user->user_name = "olanordmann";
        $user->birth_date = "01.01.2000";
        $user->registration_date = "16.11.2023";

        $tutor->first_name = "Steve";
        $tutor->last_name = "Musk";
        $tutor->user_name = "stevemusk";
        $tutor->birth_date = "01.01.1999";
        $tutor->registration_date = "10.11.2023";
        $tutor->course = ["PHP", "React", "C# & .NET"];

        echo "<h2>Student Details:</h2>";
        User::printUserDetails($user);

        echo "<h2>Tutor Details:</h2>";
        Tutor::printTutorDetails($tutor);
    ?>




    
</body>
</html>