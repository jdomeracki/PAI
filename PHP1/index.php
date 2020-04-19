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
    if (isset($_COOKIE["COOKIE"])) {
        echo "Ciasteczko jest ustawione!<br>";
        echo "Wartosc: " . $_COOKIE["COOKIE"] . "<br><br>";
    }
    ?>
    <form action="logowanie.php" method="post">
        <fieldset>
            <legend>Zaloguj sie:</legend>
            Login: <input type="text" name="login"><br><br>
            Haslo: <input type="password" name="passwd"><br><br>
            <input type="submit" value="Zaloguj mnie" name="logged">
        </fieldset>
    </form>
    <!-- <a href="user.php"> user.php </a> -->
    <form action="cookie.php" method="GET">
        <fieldset>
            <legend>Wygeneruj cookie:</legend>
            <input type="number" name="czas"><br><br>
            <input type="submit" value="Utworz" name="utworzCookie"><br>
        </fieldset>
    </form>
</body>

</html>