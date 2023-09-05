<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3</title>
</head>
<body>
    <button onclick="history.back()">Tilbake</button> <br>

    <h1>Future Value Calculator</h1>
    <h4>Fill in required information</h4>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <label for="amount">Amount(NOK): </label>
        <input type="number" name="amount" id="amount" required><br>

        <label for="interest">Interest Rate (%): </label>
        <input type="number" name="interest" id="interest" step="0.01" required><br>

        <label for="years">Number of Years: </label>
        <input type="number" name="years" id="years" required><br>

        <input type="submit" value="Calculate">
    </form>

    <?php 
        // input to insert amount of money
        // input to insert interest rate
        // input to insert number of years
        // calculate the amount of money after the given number of years
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $amount = $_POST["amount"];
            $interest = $_POST["interest"];
            $years = $_POST["years"];

            for($i = 1; $i <= $years; $i++) {
                $futureAmount = $amount * pow((1 + $interest/100), $i);
                $formattedAmount = number_format($futureAmount, 0);
                echo "<p>Year $i: $formattedAmount NOK</p>";
            }
           
            echo "<p>Amount: $amount NOK</p>";
            echo "<p>Interest: " . ($_POST["interest"]) . "%</p>";
            echo "<p>Years: $years</p>";
            echo "<p>Future amount: $futureAmount NOK</p>";
        }
    ?>
</body>
</html>