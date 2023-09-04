<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 1</title>
</head>
<body>
<button onclick="history.back()">Tilbake</button><br>
    <?php 
        $etternavn = "clinton";
        $etternavn = ucfirst(strtolower($etternavn));
        $countEtternavn = strlen($etternavn);
        echo "Hei, mitt navn er $etternavn og har $countEtternavn bokstaver i navnet";
    ?>
</body>
</html>