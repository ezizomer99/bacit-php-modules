<?php
    $folder = __DIR__ . "/../katalog/";
    function loggEvent($event) {
        global $folder;
        if (!file_exists($folder . "log.txt")) {
            $file = fopen($folder . "log.txt", "a+") or die("Kan ikke logge fil");
            $text = "<p>Denne filen ble logget "  . date("d.m.Y H:i") . "<br> Hendelse: " . $event . "</p> \n";
            fwrite($file, $text);
            fclose($file);
            
        } else {
            echo "Denne filen ble ikke logget";
        }
    }
?>