<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4</title>
</head>
<body>
    <a href="../index.php">Tilbake</a>

    <form>
    <ul>
        <li><a href="oppgave4.php?file=fakturamal.pdf">Faktura Mal</a></li>
        <li><a href="oppgave4.php?file=somestuff.pdf">Some stuff</a></li>
    </ul>
</form>



    <?php
        require("Logg.php");
        $event = "Oppgave 4 ble lastet inn";
        loggEvent($event);

        if (isset($_GET["file"])) {
            $fileDownload = $_GET["file"];
            $filePath = __DIR__ . "/../katalog/pdf_folder/" . $fileDownload;


            if (file_exists($filePath)) {
                header("Content-Description: File Transfer"); // skal overføre en fil
                header("Content-Type: application/pdf"); // filtype = pdf
                header("Content-Length: " . filesize($filePath)); // filstørrelse
                header("Content-Transfer-Encoding: binary"); // filen skal overføres i binær
                header("Content-Disposition: attachment; filename=\"" . $_GET["file"] . "\""); 
                header("Pragma: public"); // skal kunne caches

                readfile($filePath);

                loggEvent("Filen " . $fileDownload . " ble lastet ned");

                exit;
            } else {
                echo "Filen finnes ikke";
                loggEvent("Brukeren prøvde å laste ned en fil som ikke finnes");
            }
        }
    ?>
</body>
</html>