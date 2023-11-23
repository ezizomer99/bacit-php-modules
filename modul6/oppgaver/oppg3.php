<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3</title>
</head>
<body>
    
    <?php
        include "../klasser/User3.php";

        $userOne = new User3();
        $userTwo = new User3();

        $userOne->first_name = "Ola";
        $userOne->last_name = "Nordmann";
        $userOne->birth_date = "01.01.2000";

        $userTwo->first_name = "Steve";
        $userTwo->last_name = "Musk";
        $userTwo->birth_date = "01.01.1999";

        echo "<h2>User Details:</h2>";
        User3::printUserDetails($userOne);
        echo "<br>";
        User3::printUserDetails($userTwo);
        echo "<br>";

        echo "<h2>Deleted Users:</h2>";
        unset($userOne);
        unset($userTwo);

        User3::arrayOfDeletedUsernames();
    ?>
</body>
</html>