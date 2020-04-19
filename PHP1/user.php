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
    if (isset($_SESSION["zalogowany"]) && $_SESSION["zalogowany"] == true) {
        echo "Jestes zalogowany jako: " . $_SESSION["zalogowanyImie"] . "<br><br>";
    } else {
        header("Location: index.php");
    }
    if (isset($_POST["wgraj"])) {
        $currentDir = getcwd();
        $uploadDir = "/";
        $fileName = $_FILES['plik']['name'];
        $fileSize = $_FILES['plik']['size'];
        $fileTmpName = $_FILES['plik']['tmp_name'];
        $fileType = $_FILES['plik']['type'];
        if (
            $fileName != "" &&
            ($fileType == 'image/png' || $fileType == 'image/PNG' ||
                $fileType == 'image/jpeg' || $fileType == 'image/JPEG')
        ) {
            $uploadPath = $currentDir . $uploadDir . $fileName;
            if (move_uploaded_file($fileTmpName, $uploadPath)) {
                echo "Zdjecie zostało załadowane: <br><br>";
                echo "<img src=\"" . $fileName . "\"height=\"200\" width=\"200\"><br><br>";
            }
        }
    }
    ?>
    <!-- <a href="index.php"> index.php </a><br> -->
    <form action='user.php' method='POST' enctype='multipart/form-data'>
        <fieldset>
            <legend>Wgraj zdjecie:</legend>
            <input type="file" name="plik"><br>
            <input type="submit" value="Wgraj" name="wgraj"><br>
        </fieldset>
    </form>
    <img src="OK_10.png" alt="Placeholder" height="200" width="200">
    <form action="index.php" method="POST">
        <input type="submit" value="Wyloguj" name="wyloguj">
    </form>
</body>

</html>