<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bilder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1 class="display-4">Bilder</h1>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./index.php">Hem</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./bilder.php">Bilder</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./bildGalleri.php">Bildgalleri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./adress.php">IP Adress</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./datum.php">Datum</a>
            </li>
        </ul>

        <?php
        if (isset($_POST['Submit1'])) {
            $filepath = "uppladdade-bilder/" . $_FILES["file"]["name"];

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
                echo "<div class=\"imgKontainer\"><img src=" . $filepath . " alt=\"\"></div>";
            } else {
                echo "<p class=\"alert alert-danger\">Det blev fel!</p>";
            }
        }
        ?>

    </div>
</body>

</html>