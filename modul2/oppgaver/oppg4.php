<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4</title>
</head>
<body>
<button onclick="history.back()">Tilbake</button><br>

    <?php 
        $tall_1 = 10;
        $tall_2 = 20;
        $differanse = abs($tall_1 - $tall_2);
        echo "Differansen mellom $tall_1 og $tall_2 er $differanse";
    ?>
</body>
</html>