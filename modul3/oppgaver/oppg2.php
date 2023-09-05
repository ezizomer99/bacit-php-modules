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
        $sum = 0;

        for($i=0; $i<10; $i++) {
            echo "$i <br>";
            ob_flush();
            flush();
            sleep(1);
            $sum += $i;
        }

        sleep(2);
        echo "Summen av disse tallene er: $sum"
    ?>
</body>
</html>