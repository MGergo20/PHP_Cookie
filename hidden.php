<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIDDEN</title>
</head>

<body>
<?php
    $szamlalo = 0;
    if (isset($_POST["szamlalo"])) {
        $szamlalo = (int)$_POST["szamlalo"];
    }
    $szamlalo++;
    echo "A számáló értéke : $szamlalo";
    
    ?>
    <form method="post">
        <input type="hidden" name="szamlalo" value="<?php echo $szamlalo?>">
        <input type="text" name="szamlalo" value="<?php echo $szamlalo?>">
        <input type="submit" value="Növelés">
    </form>
</body>

</html>