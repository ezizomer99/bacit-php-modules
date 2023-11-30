<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 5</title>
</head>
<body>
    <a href="../index.php">Tilbake</a>
    <?php
        include "../misc/dbcon.php";

        $sql = "SELECT
                u.firstname,
                u.lastname,
                u.email,
                u.phone,
                tu.firstname AS tutor_firstname,
                tu.lastname AS tutor_lastname,
                u.preference_course
                FROM users u
                INNER JOIN tutors t ON u.preference_tutor = t.tutor_id
                INNER JOIN users tu ON tu.user_id = u.preference_tutor
                ORDER BY u.preference_tutor, u.preference_course";

        $query = $pdo->prepare($sql);

        try {
            $query->execute();
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }

        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            $users[] = $row;
        }

        echo "<table>
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>E-post</th>
                        <th>Telefon</th>
                        <th>LA preferanse</th>
                        <th>Kurs preferanse</th>
                    </tr>
                </thead>
                <tbody>";

        if ($query->rowCount() > 0) {
            foreach ($users as $user) {
                echo "<tr>
                        <td>" . $user->firstname . " " . $user->lastname . "</td>
                        <td>" . $user->email . "</td>
                        <td>" . $user->phone . "</td>
                        <td>" . $user->tutor_firstname . " " . $user->tutor_lastname . "</td>
                        <td>" . $user->preference_course . "</td>
                    </tr>";
                }
            } else {
                echo "<tr>
                        <td>Ingen studenter funnet.</td>
                    </tr>";
            }
        echo    "</tbody>
            </table>";
    ?>
</body>
</html>