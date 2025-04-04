<?php

    setcookie("user", "Medgyaszay Gergő", time()+5);
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php    
        if (isset($_COOKIE["user"])){
            echo "Üdvözöllek ".$_COOKIE["user"]."!";
        }else{
            echo "Üdvözöllek vendégmunkás!";
        }
    ?>
</body>
</html>