<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 1</title>
</head>
<body>
    <button onclick="history.back()">Tilbake</button> <br>

    <h1>Sjekk om datoen har utløpt</h1>
    <h3>Plugg inn dato her:</h3>

    <form method="get">
    <input type = "date" id = "date" name = "date">
    <input type = "submit" name="submit" value = "Check date">

    </form>
    <?php 
    if(isset($_GET["submit"])) {
        //check if date has expired
        $expireDate = $_GET["date"];
        $checkDate = date("Y-m-d");
        //if date has expired, print "Datoen har utløpt", 
        //else print "Datoen har ikke utløpt"
        if ($checkDate > $expireDate) {
            echo "<p>Datoen har utløpt</p>";
        } else {
            echo "<p>Datoen har ikke utløpt</p>";
        }
    }
    ?>
</body>
</html>