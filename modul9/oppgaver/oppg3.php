<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3</title>
</head>
<body>
    <a href="../index.php">Tilbake</a>

    <?php
        require("Logg.php");
        $event = "Oppgave 3 ble lastet inn";
        loggEvent($event);

        session_start();
        $messageArray = array();

        $_SESSION["user"]["firstname"] = "Elon";
        $_SESSION["user"]["lastname"] = "Musk";
        $_SESSION["user"]["email"] = "elon@musk.no";
        $_SESSION["user"]["phone"] = "12345678";
        $_SESSION["user"]["profilePic"] = null;
    ?>

    <div>
        <h1>Din Profil</h1>

        <form>
            <div>
                <label for="firstname"></label>
                <input type="text" name="firstname" readonly value="<?php echo $_SESSION["user"]["firstname"] ?>">
            </div>

            <div>
                <label for="lastname"></label>
                <input type="text" name="lastname" readonly value="<?php echo $_SESSION["user"]["lastname"] ?>">
            </div>

            <div>
                <label for="email"></label>
                <input type="email" name="email" readonly value="<?php echo $_SESSION["user"]["email"] ?>">
            </div>

            <div>
                <label for="phone"></label>
                <input type="text" name="phone" readonly value="<?php echo $_SESSION["user"]["phone"] ?>">
        </form>

        <?php
            if (isset($_POST["upload"])) {
                if (is_uploaded_file($_FILES["profilePicture"]["tmp_name"])) {
                    $allowedTypes = array("image/jpeg", "image/png", "image/gif");
                    $maxSize = 2097152;
                    $folder = __DIR__ . "/../katalog/ProfilePictures/";

                    $fileType = $_FILES["profilePicture"]["type"];
                    $fileSize = $_FILES["profilePicture"]["size"];

                    if (!in_array($fileType, $allowedTypes)) {
                        $messageArray[] = "Bildet må være av typen JPG, PNG eller GIF";
                    }

                    if ($fileSize > $maxSize) {
                        $messageArray[] = "Bildet må være mindre enn 2MB";
                    }

                    if (empty($messageArray)) {
                        $sfx = array_search($fileType, $allowedTypes);
                        $fileName = "mjprofilepic" . $sfx;

                        while (file_exists($folder . $fileName)) {
                            $fileName = "mjprofilepic" . date("dmY") . "." . $sfx;
                        }

                        $uploaded = move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $folder . $fileName);

                        if ($uploaded) {
                            $messageArray[] = "Bildet ble lastet opp";
                            $_SESSION["user"]["profilePic"] = $fileName;
                            loggEvent("Bilde ble lastet opp");
                        } else {
                            $messageArray[] = "Bildet ble ikke lastet opp";
                            loggEvent("Bilde ble ikke lastet opp");
                        }
                    }
                } else {
                    $messageArray[] = "Du må velge et bilde";
                }
            }
        ?>

        <img id="profilePic" src=
        <?php
            if ($_SESSION["user"]["profilePic"] === null) {
                echo "/../katalog/ProfilePictures/mjprofilepic.png";
            } else {
                echo "/../katalog/ProfilePictures/" . $_SESSION["user"]["profilePic"];
            }
        ?> 
        height="200px" width="200px">

        <form method="post" action="
        <?php
            echo $_SERVER["PHP_SELF"];
        ?>
        " 
        enctype="multipart/form-data">
            <div>
                <label for="profilePicture">Last opp profilbilde</label>
                <input type="file" name="profilePicture">
            </div>

            <div>
                <input type="submit" name="upload" value="Last opp">
            </div>
        </form>
        <p>
            <?php
                if (!empty($messageArray)) {
                    foreach ($messageArray as $message) {
                        echo $message . "<br>";
                    }
                }
            ?>
        </p>

        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
    </div>
</body>
</html>