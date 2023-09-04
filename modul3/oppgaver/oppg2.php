<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2</title>
</head>
<body>
    <button onclick="history.back()">Tilbake</button> <br>

    <h1>Tallteller</h1>

    <?php 
        $sum = 0+1+2+3+4+5+6+7+8+9;

        echo "<p>Ferdig å telle! Summen av tallene ble $sum</p>";

        for($i=0; $i<9; $i++) {
            echo "<p></p>";
        }
    ?>
</body>
</html>