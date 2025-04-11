<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL</title>
</head>

<body>
    <?php
    $szamlalo = 0;
    if (isset($_GET["szamlalo"]) && preg_match("/^\d+$/",$_GET["szamlalo"])) {
        $szamlalo = $_GET["szamlalo"];
    }
    echo "A számáló értéke : $szamlalo";
    $szamlalo++;
    ?>
    <a href="url.php?szamlalo=<?php echo "$szamlalo" ?>">Elküldi a már megnövelt értéket url-re</a>
</body>

</html>