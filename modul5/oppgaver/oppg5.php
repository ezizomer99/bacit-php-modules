<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 5</title>
</head>
<body>
<button onclick="history.back()">Tilbake</button>
<h1>Temperature Converter</h1>

<form method="post">
    <label for="temperature">Enter Temperature:</label>
    <input type="text" name="temperature" id="temperature" required>
    
    <select name="unit" id="unit">
        <option value="celsius">Celsius</option>
        <option value="fahrenheit">Fahrenheit</option>
    </select>
    
    <input type="submit" value="Convert">
</form>

<?php
    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    function fahrenheitToCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $temperature = $_POST['temperature'];
        $unit = $_POST['unit'];
        $result = 0;

        if ($unit === 'celsius') {
            $result = celsiusToFahrenheit($temperature);
            echo "<p>$temperature °C is $result °F</p>";
        } elseif ($unit === 'fahrenheit') {
            $result = fahrenheitToCelsius($temperature);
            echo "<p>$temperature °F is $result °C</p>";
        }
    }
    ?>
</body>
</html>