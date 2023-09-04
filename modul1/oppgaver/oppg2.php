<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2</title>
</head>
<body>
    <button onclick="history.back()">Tilbake</button>
    <p>display_error viser at både Local Value og Master Value er On.</p>
    <p>document_root rooter til C:/xampp/htdocs</p>
    <p>phpinfo gir en deg en informert tabell om PHP konfigurasjonene dine i din server. Ved å bruke denne funksjonen kan man enkelt se om serveren er konfigurert riktig og om man har de nødvendige komponentene installert.
        Blandt annet kan funksjonen også hjelpe deg med debugging, sikkerhet og optimalisering. og lete etter dokumentasjon.
        Til slutt må man også være veldig bevisst på når og hvor en bruker funksjonen, siden den så og si avslører alt av sensitiv informasjon.
    </p>
    <?php
        phpinfo();
    ?>
</body>
</html>
