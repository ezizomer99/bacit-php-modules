<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4</title>
</head>
<body>
    <a href="../index.php">Tilbake</a>

    <?php
        include "../misc/dbcon.php";

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
                ORDER BY ts_date";

        $query = $pdo->prepare($sql);

        try {
            $query->execute();
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }

        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            $timeslots[] = $row;
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

                "<tbody>";

        if ($query -> rowCount() > 0) {
            foreach ($timeslots as $timeslot) {
                echo "<tr>
                        <td>" . $timeslot->firstname . " " . $timeslot->lastname . "</td>
                        <td>" . $timeslot->ts_date . "</td>
                        <td>" . $timeslot->start_time . "</td>
                        <td>" . $timeslot->location . "</td>
                        <td>" . $timeslot->course . "</td>
                    </tr>";
            }
        } else {
            echo "<tr><td>Ingen timeslots funnet</td></tr>";
        }
    ?>
    
</body>
</html>