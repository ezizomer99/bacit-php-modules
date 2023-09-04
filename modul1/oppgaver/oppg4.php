<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4</title>
</head>
<body>
<button onclick="history.back()">Tilbake</button>

    <?php 
        $tall1 = 10;
        $tall2 = 20;

        $sum = $tall1 + $tall2;
        $gjennomsnitt = ($tall1 + $tall2) / 2;

        $resultat = "Summen av $tall1 og $tall2 er $sum og gjennomsnittet er $gjennomsnitt";

        echo $resultat;
    ?>
</body>
</html>