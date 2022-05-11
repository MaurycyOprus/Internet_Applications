<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <?php
        $czas = $_GET['czas'];
        setcookie("cookie_1", "ciacho", time() + $czas, "/");
        echo "Dodano cookie, czas: " . $czas . " s </br>";
    ?>
    <button onclick="location.href='index.php';">USER</button>
</body>

</html>