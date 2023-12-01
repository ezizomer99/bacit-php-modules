<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2</title>
</head>
<body>
    <a href="../index.php">Tilbake</a>

    <p>
        Om listen er tom, så har du ikke besøkt noen sider.
        Loggen vil fylles opp etterhvert som du besøker sider.
        
    </p>
    <?php
        require("Logg.php");
        $event = "Oppgave 2 ble lastet inn";
        loggEvent($event);

        global $folder;
        if (file_exists($folder . "log.txt")) {
            $fileContent = file($folder . "log.txt");

            $lastTenEntries = array_slice($fileContent, -10);

            foreach ($lastTenEntries as $entry) {
                echo $entry;
            }
        } else {
            echo "Loggfilen finnes ikke";}
    ?>
</body>
</html>