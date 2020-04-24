<?php session_start();
if (
    isset($_POST['dodaj']) &&
    is_numeric($_POST['id_prac']) &&
    is_string($_POST['nazwisko'])
) {
    $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
    if (!$link) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $sql = "INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
    $result = $stmt->execute();
    if (!$result) {
        printf("Query failed: %s\n", mysqli_error($link));
    }
    $_SESSION['id'] = $_POST['id_prac'];
    $_SESSION['nw'] = $_POST['nazwisko'];
    $stmt->close();
    header("Location: form06_get.php");
} else {
    $_SESSION['error'] = true;
    header("Location: form06_post.php");
}
