<?php
require_once '../src/functions.php';

if (checkDownloadAccess()) {
    startDownload();
}
?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Download - MMLC - Modified Module Loader Client</title>
        <meta name="author" content="Robin Wieschendorf">

        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>MMLC - Modified Module Loader Client</h1>
            <a href="/">zurück zur Startseite</a>

            <div class="notice danger">
                <strong>Hinweis:</strong> Aktuell können nur <strong>Beta-Tester</strong> den MMLC herunterladen.
            </div>

        
            <form class="download" action="" method="post">
                <h2>MMLC Installer Download</h2>

                <input type="hidden" name="action" value="download">

                <label for="user">Username</label><br>
                <input type="text" name="user" value=""><br><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" value=""><br><br>

                <button type="submit">Start download</button>
            </form>
           
        </div>

        <?php include '../views/footer.php'; ?>
    </body>
</html>
