<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 5</title>
</head>
<body>
    <button onclick="history.back()">Tilbake</button>
    <h1>Contact Us</h1>
    <p>Fill out the form below to send us a message:</p>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $name = $_POST["name"];
        $email = $_POST["email"];
        $messageTitle = $_POST["messageTitle"];
        $messageContent = $_POST["messageContent"];

        echo "<h2>Message Sent:</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Message Title:</strong> $messageTitle</p>";
        echo "<p><strong>Message Content:</strong> $messageContent</p>";
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="messageTitle">Message Title:</label>
        <input type="text" name="messageTitle" id="messageTitle" required><br>

        <label for="messageContent">Message Content:</label><br>
        <textarea name="messageContent" id="messageContent" rows="4" required></textarea><br>

        <input type="submit" value="Send Message">
    </form>
</body>
</html>
