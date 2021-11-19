<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Höstprojekt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1 class="display-4"> Mitt Höstprojekt</h1>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Hem</a>
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

        <form class="kol2" action="bildGalleri.php" enctype="multipart/form-data" method="POST">
            <label>Ladda up bilder</label>
            <input type="file" name="file"><br />
            <button class="primary" type="submit" value="Upload" name="Submit1">Ladda up</button>
        </form>
    </div>
</body>

</html>