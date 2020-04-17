<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <?php
    require 'funkcje.php';
    echo "<h1> Nasz system </h1>";
    if (isset($_POST["wyloguj"])) {
        $_SESSION["zalogowany"] = false;
    }
    ?>
    <form action="logowanie.php" method="post">
        Login: <input type="text" name="login"><br>
        Haslo: <input type="password" name="passwd"><br>
        <input type="submit" value="Zaloguj" name="logged">
    </form>
    <a href="user.php"> user.php </a>
</body>

</html>