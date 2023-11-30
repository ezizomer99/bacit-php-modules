<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4.2</title>
</head>
<body>
    <a href="../index.php">Tilbake</a>

    <?php
        include "../misc/dbcon.php";

        $today = date('Y-m-d');

        $sql = "SELECT 
                timeslot_id, 
                users.firstname, 
                users.lastname, 
                ts_date, 
                start_time, 
                location, 
                course
                FROM timeslots
                INNER JOIN tutors ON timeslots.tutor_id = tutors.tutor_id
                INNER JOIN users ON tutors.user = users.user_id
                WHERE ts_date >= :today
                ORDER BY ts_date";

        $query = $pdo->prepare($sql);
        $query->bindParam(":today", $today, PDO::PARAM_STR);

        try {
            $query->execute();
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }

        echo "<table>
                <thead>
                    <tr>
                        <th>LA</th>
                        <th>Dato</th>
                        <th>Start</th>
                        <th>Lokasjon</th>
                        <th>Kurs</th>
                    </tr>
                </thead>";

        echo "<tbody>";

        if ($query->rowCount() > 0) {
            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                echo "<tr>
                        <td>" . $row->firstname . " " . $row->lastname . "</td>
                        <td>" . $row->ts_date . "</td>
                        <td>" . $row->start_time . "</td>
                        <td>" . $row->location . "</td>
                        <td>" . $row->course . "</td>
                    </tr>";
            }
        } else {
            echo "<tr><td>Ingen timeslots funnet</td></tr>";
        }

        echo "</tbody></table>";
    ?>
    
</body>
</html>
