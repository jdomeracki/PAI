    <?php session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['nw'])) {
        echo "<script> alert('Dodałeś pracownika do bazy!') </script>";
        unset($_SESSION['id']);
        unset($_SESSION['nw']);
    }
    $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
    if (!$link) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $sql = "SELECT * FROM pracownicy";
    $result = $link->query($sql);
    foreach ($result as $v) {
        echo $v["ID_PRAC"] . " " . $v["NAZWISKO"] . "<br/>";
    }
    echo "<br><br><a href='form06_post.php'> Dodaj pracownika </a>";
    $result->free();
    $link->close();
    ?>
    