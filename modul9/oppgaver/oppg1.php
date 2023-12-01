<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 1</title>
</head>
<body>
    <a href="../index.php">Tilbake</a>
    <table>
        <thead>
            <tr>
                <th>Filnavn</th>
                <th>Type</th>
                <th>Størrelse (bytes)</th>
                <th>Sist endret</th>
                <th>Kjørbar</th>
                <th>Lesbar</th>
                <th>Skrivbar</th>
            </tr>
        </thead>
        <tbody>
    <?php
        $folder = __DIR__ . "/../katalog/";
        $pointer = opendir($folder);

        while ($file = readdir($pointer)) {
            if ($file != "." && $file != "..") {
                $filePath = $folder . $file;

                echo "<tr>";
                echo "<td>". $file . "</td>";
                echo "<td>". mime_content_type($filePath) . "</td>";
                echo "<td>". filesize($filePath) . "</td>";
                echo "<td>". date("d.m.Y H:i", filemtime($filePath)) . "</td>";
                echo "<td>". (is_executable($filePath) ? "Ja" : "Nei") . "</td>";
                echo "<td>". (is_readable($filePath) ? "Ja" : "Nei") . "</td>";
                echo "<td>". (is_writable($filePath) ? "Ja" : "Nei") . "</td>";
                echo "</tr>";
            }
        }

        closedir($pointer);
    ?>
        </tbody>
    </table>
</body>
</html>
