<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2</title>
</head>
<body>
<button onclick="history.back()">Tilbake</button><br>
    <?php 
    $etternavn = "<h1>Clinton</h1>";

    $sanitizedEtternavn = strip_tags($etternavn);

    echo "Dette er usanitized: $etternavn";
    echo "Dette er sanitized: $sanitizedEtternavn";

    ?>
</body>
</html>