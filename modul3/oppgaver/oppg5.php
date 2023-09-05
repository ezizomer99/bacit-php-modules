<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 5</title>
</head>
<body>
    <h1>Sjakkbrett og hvete</h1>

    <table border="1">
        <tr>
            <th>Antall ruter</th>
            <th>Antall hvete</th>
        </tr>
        <?php 
            $kornPåRute = 1;
            $totalKorn = 0;
            $totalVekt = 0;

            for($rute = 1; $rute <= 64; $rute++) {
                echo "<tr>";
                echo "<td>Rute $rute</td>";
                echo "<td>$kornPåRute korn</td>";
                echo "</tr>";

                $totalKorn += $kornPåRute;
                $kornPåRute *= 2;
            }

            $totalVekt = $totalKorn * 0.035 / 1000000;

            echo "<p>Totalt antall korn på brett: $totalKorn korn</p>";
            echo "<p>Total vekt: $totalVekt tonn</p>";
        ?>

    </table>
</body>
</html>