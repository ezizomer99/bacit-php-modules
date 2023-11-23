<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 1</title>
</head>
<body>
    <h1>Matrise</h1>
    <button onclick="history.back()">Tilbake</button>

    <?php 
        $matrise = array(
            0 => "Hund",
            3 => "Katt",
            5 => "Hest",
            7 => "Fugl",
            8 => "Fisk",
            15 => "Løve",
        );

        echo "<pre>";
        foreach ($matrise as $key => $value) {
            echo "Indeks: $key, Verdi: $value <br>";
        }
        echo "</pre>";
    ?>
</body>
</html>