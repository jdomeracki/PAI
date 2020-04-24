<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8' />
</head>

<body>
    <?php
    if (isset($_SESSION['error']) && $_SESSION['error'] == true) {
        echo "<script> alert('Dodanie pracownika do bazy nie powiodło się') </script>";
        unset($_SESSION['error']);
    }
    ?>
    <form action='form06_redirect.php' method='POST' enctype='multipart/form-data'>
        <fieldset>
            <legend>Dodaj pracownika do bazy:</legend><br>
            id_prac: <input type="text" name="id_prac"><br><br>
            nazwisko: <input type="text" name="nazwisko"><br><br>
            <input type="submit" value="Dodaj" name="dodaj"><br><br>
        </fieldset>
    </form>
    <br><a href="form06_get.php"> Lista pracowników </a><br>
</body>

</html>