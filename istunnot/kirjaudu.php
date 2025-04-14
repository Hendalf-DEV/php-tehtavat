<?php
session_start();

if (isset($_GET["ulos"])) {
    session_unset();
    session_destroy();
    session_start();

    session_regenerate_id(true);

    header("Location: kirjaudu.php");
    exit;
}

if (isset($_POST["tehtava1"])) {
    $nimi = $_POST["nimi"];
    $avain = $_POST["avain"];

    if ($avain == 'php-ohjelmointi') {
        session_regenerate_id(true);
        $_SESSION['ktunnus'] = $nimi;
        header("Location: suojattu.php");
        exit;
    } else {
        $_SESSION['virhe'] = 'Avain väärin!';
        header("Location: kirjaudu.php");
        exit;
    }
}

if (isset($_SESSION['ktunnus'])) {
    header("Location: suojattu.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Tehtäviä: Istunnot</title>
</head>
<body>

<?php
/**************
 *  Tehtävä 4  *
 **************/
echo "<h3>Tehtävä 4</h3>";
?>
<p>Ulos kirjautuminen siirtynyt suojatulle sivulle</p>
<?php
echo "<h3>Tehtävät 1 ja 2</h3>";

if (isset($_SESSION['virhe'])) {
    echo '<p style="color:red;">' . htmlspecialchars($_SESSION['virhe']) . '</p>';
    unset($_SESSION['virhe']);
}

/********************
 *  Tehtävät 1 + 2  *
 ********************/
?>

<form action="kirjaudu.php" method="post">
    Käyttäjänimi: <input type="text" name="nimi"><br>
    Avain: <input type="text" name="avain"><br>
    <input type="submit" name="tehtava1" value="Kirjaudu sisään">
</form>

<?php


/**************
 *  Tehtävä 3  *
 **************/
echo "<h3>Tehtävä 3</h3>";

echo session_id()

?>

</body>
</html>