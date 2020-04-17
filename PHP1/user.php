<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <?php
    require_once("funkcje.php");
    if (isset($_SESSION["zalogowany"]) && $_SESSION["zalogowany"] == true) {
        echo $_SESSION["zalogowanyImie"] . "<br>";
    } else {
        header("Location: index.php");
    }
    ?>
    <a href="index.php"> index.php </a><br>
    <form action="index.php" method="post">
        <input type="submit" value="Wyloguj" name="wyloguj">
    </form>
    <form></form>
</body>

</html>