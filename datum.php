<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datum</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1 class="display-4">Datum</h1>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./index.php">Hem</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./bilder.php">Bilder</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./bildGalleri.php">Bildgalleri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./adress.php">IP Adress</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./datum.php">Datum</a>
            </li>
        </ul>

        <?php

        // Datum
        setlocale(LC_ALL, "sv_SE.utf8");
        $klockSlaget = strftime("%H:%M:%S %A %y %B");
        echo "<h2> Det här är dagens datum </h2>";
        echo "<p>$klockSlaget</p>";

        ?>

    </div>
</body>

</html>