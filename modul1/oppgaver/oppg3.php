<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Oppgave 3</title>
</head>
<body>
<button onclick="history.back()">Tilbake</button>
    <?php 
        $navn = "Steve";
        $alder = 20;
    ?>
    <h2>Tabell Liste</h2>
    <table border="1">
        <thead>
            <tr>
                <th scope="col">Navn</th>
                <th scope="col">Alder</th>
            </tr>
        </thead>
        <tr>
            <td><?php echo $navn; ?></td>
            <td><?php echo $alder; ?></td>
        </tr>
    </table>

    <h2>Numerert Liste</h2>
    <ol>
        <li>Navn: <?php echo $navn; ?></li>
        <li>Alder: <?php echo $alder; ?></li>
    </ol>

    <h2>Punktmerket Liste</h2>
    <ul>
        <li>Navn: <?php echo $navn; ?></li>
        <li>Alder: <?php echo $alder; ?></li>
    </ul>

    <h2>Paragraf</h2>
    <p><?php echo "Navnet til personen er $navn og han er $alder år gammel"; ?></p>
</body>
</html>