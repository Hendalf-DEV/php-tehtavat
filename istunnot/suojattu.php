<?php
session_start();

if (!isset($_SESSION["ktunnus"])) {
    header("Location: kirjaudu.php");
    die("Pääsy kielletty!");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Suojattu sivu</title>
</head>
<body>
<h2>Olet kirjautunut</h2>
<p>Tämä sivu näkyy vain sisäänkirjautuneille käyttäjille.</p>
<p><a href="kirjaudu.php?ulos">Kirjaudu ulos</a></p>
</body>
</html>
