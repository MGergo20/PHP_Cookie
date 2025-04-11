<?php
    session_start();
    echo "Sessin Id: ".session_id();
    if (isset($_SESSION["szamlalo"])) {
        $_SESSION["szamlalo"]++;
    }
    else{
        $_SESSION["szamlalo"] = 0;
    }
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION</title>
</head>
<body>
    <form method="post">
        <p>Kattintások száma: <?php echo $_SESSION["szamlalo"]?></p>
        <input type="submit" value="Növelés">
    </form>
</body>
</html>