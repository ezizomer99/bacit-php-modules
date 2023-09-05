<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4</title>
</head>
<body>
    <button onclick="history.back()">Tilbake</button> <br>
    <h1>Fylkestilhørighet script</h1>
    <h4>Velg kommune</h4>

    <?php 
        $kommuneTilFylke = [
            "Kristiansand" => "Agder",
            "Lillesand" => "Agder",
            "Birkenes" => "Agder",
            "Harstad" => "Troms og Finnmark",
            "Kvæfjord" => "Troms og Finnmark",
            "Tromsø" => "Troms og Finnmark",
            "Bergen" => "Vestland",
            "Trondheim" => "Trøndelag",
            "Bodø" => "Nordland",
            "Alta" => "Troms og Finnmark"
        ];

        $brukerKommune = isset($_POST["kommune"]) ? $_POST["kommune"] : "";

        if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($brukerKommune)) {
            if(array_key_exists($brukerKommune, $kommuneTilFylke)) {
                $Fylke = $kommuneTilFylke[$brukerKommune];
                echo "<p>$brukerKommune ligger i $Fylke fylke</p>";
            }
        }
    ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="kommune">Velg kommune: </label>
        <select name="kommune" required>
            <option value="" disabled selected>Velg kommune</option>
            <?php 
                foreach($kommuneTilFylke as $kommune => $fylke) {
                    echo "<option value='$kommune'>$kommune</option>";
                }
            ?>
            <input type="submit" value="Søk">
        </select>
    </form>
</body>
</html>