<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <?php
    require "funkcje.php";
    if (isset($_GET["utworzCookie"])) {
        $czas_zycia = $_GET["czas"];
        setcookie("COOKIE", "MTIzNHVoMTJyNWd5aXQxM2didXIxM3VvaGRmc2g=", time() + $czas_zycia, "/");
        header("Location: index.php");
    }
    ?>
    <a href="index.php"> index.php </a><br>
</body>

</html>