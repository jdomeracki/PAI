<?php session_start(); ?>
<?php
require 'funkcje.php';
if (isset($_POST["logged"])) {
    $login = test_input($_POST["login"]);
    $passwd = test_input($_POST["passwd"]);
    //echo "Przeslany login" . ": " . $login . "<br>";
    //echo "Przeslane haslo" . ": " . $passwd . "<br>";
    if ($login == $osoba1->login && $passwd == $osoba1->haslo) {
        $_SESSION["zalogowanyImie"] = $osoba1->imieNazwisko;
        $_SESSION["zalogowany"] = true;
        header("Location: user.php");
    } elseif ($login == $osoba2->login && $passwd == $osoba2->haslo) {
        $_SESSION["zalogowanyImie"] = $osoba2->imieNazwisko;
        $_SESSION["zalogowany"] = true;
        header("Location: user.php");
    } else {
        header("Location: index.php");
    }
}
?>