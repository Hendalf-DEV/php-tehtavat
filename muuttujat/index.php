<!DOCTYPE html>
<html>
<head>
    <title>Tehtäviä: Muuttujat ja tulostaminen</title>
</head>
<body>
<?php
/**************
 *  Tehtävä 1  *
 **************/

echo "<h3>Tehtävä 1</h3>";

$koulu = "Omnia";
$tutkinto = "tieto- ja viestintätekniikan perustutkinto";
$lkm = 12;

echo "<p>Opiskelen {$koulu}ssa.<br>Tutkintoni on $tutkinto.<br>Luokassani on $lkm opiskelijaa.</p>";

/**************
 *  Tehtävä 2  *
 **************/

echo "<h3>Tehtävä 2</h3>";
?>

<form action="index.php" method="post">
    Nimi: <input type="text" name="nimi">
    <input type="submit" name="tehtava2">
</form>

<?php

if (isset($_POST["tehtava2"])) {

    $nimi = $_POST["nimi"];

    echo "<p>Hei, $nimi!</p>";

}
/**************
 *  Tehtävä 3  *
 **************/
echo "<h3>Tehtävä 3</h3>";
?>

<form action="index.php" method="post">
    Ensimmäinen luku: <input type="text" name="luku1"><br>
    Toinen luku: <input type="text" name="luku2"><br>
    <input type="submit" name="tehtava3">
</form>

<?php

if (isset($_POST["tehtava3"])) {

    $luku1 = $_POST["luku1"];
    $luku2 = $_POST["luku2"];

    echo "<p>{$luku1} + {$luku2} = " . ($luku1 + $luku2) . "<br>" .
        "{$luku1} - {$luku2} = " . ($luku1 - $luku2) . "<br>" .
        "{$luku1} * {$luku2} = " . ($luku1 * $luku2) . "<br>" .
        "{$luku1} / {$luku2} = " . ($luku1 / $luku2) . "<br>" .
        "{$luku1} % {$luku2} = " . ($luku1 % $luku2) . "</p>";

}

/**************
 *  Tehtävä 4  *
 **************/
echo "<h3>Tehtävä 4</h3>";

//$php = "PHP";
//$java = "Java";
//$perl = "Perl";
//$jsscript = "JavaScript";

$kielet = array("PHP", "Java", "Perl", "JavaScript");
echo '<ul>';
foreach ($kielet as $kieli) {
    echo '<li>' . $kieli . '</li>';
}
echo '</ul>';

?>

<?php

/**************
 *  Tehtävä 5  *
 **************/
echo "<h3>Tehtävä 5</h3>";
?>

<form action="index.php" method="post">
    Anna luku: <input type="text" name="luku"><br>
    <input type="submit" name="tehtava5">
</form>

<?php

if (isset($_POST["tehtava5"])) {

    $luku = $_POST["luku"];

    echo "Luku on $luku.<br>";
    $luku += 2;
    echo "Lisätty kaksi. Luku on $luku.<br>";
    $luku -= 4;
    echo "Vähennetty neljä. Luku on $luku.<br>";
    $luku *= 5;
    echo "Kerrottu viidellä. Luku on $luku.<br>";
    $luku /= 3;
    echo "Jaettu kolmella. Luku on $luku.<br>";
    $luku++;
    echo "Kasvatettu yhdellä. Luku on $luku.<br>";
    $luku--;
    echo "Vähennetty yhdellä. Luku on $luku.<br>";

}
/**************
 *  Tehtävä 6  *
 **************/
echo "<h3>Tehtävää 6</h3>";

$luvut = array(2, 5, 7, 12);

$luvut[] = 19;
echo '<p>';
foreach ($luvut as $luku) {
    echo $luku . " ";
}
echo '</p>';


/**************
 *  Tehtävä 7  *
 **************/
echo "<h3>Tehtävä 7</h3>";
?>

<form action="index.php" method="post">
    Kuinka mones luku korvataan? <input type="text" name="indeksi"><br>
    Millä luvulla? <input type="text" name="uusi_luku"><br>
    <input type="submit" name="tehtava7">
</form>

<?php

if (isset($_POST["tehtava7"])) {

    $monesko = $_POST["indeksi"];
    $uusi_luku = $_POST["uusi_luku"];

    $lukutaulukko = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    echo "Luvut alussa: " . join(" ", $lukutaulukko) . "<br>";
    $lukutaulukko[$monesko - 1] = $uusi_luku;
    echo "Luvut korvaamisen jälkeen: " . join(" ", $lukutaulukko) . "<br>";
}

/**************
 *  Tehtävä 8  *
 **************/
echo "<h3>Tehtävä 8</h3>";

$paakaupungit = array("Italia" => "Rooma", "Tanska" => "Kööpenhamina", "Suomi" => "Helsinki", "Ranska" => "Pariisi", "Saksa" => "Berliini", "Kreikka" => "Ateena", "Irlanti" => "Dublin", "Hollanti" => "Amsterdam", "Espanja" => "Madrid", "Ruotsi" => "Tukholma", "Iso-Britannia" => "Lontoo", "Viro" => "Tallinna", "Unkari" => "Budapest", "Itävalta" => "Vienna", "Puola" => "Varsova");

// kirjoita koodisi alla oleviin tulostuslauseisiin
echo "<p>Suomen pääkaupunki on {$paakaupungit["Suomi"]} </p>";
echo "<p>Italian pääkaupunki on {$paakaupungit["Italia"]}</p>";
echo "<p>Kreikan pääkaupunki on {$paakaupungit["Kreikka"]}</p>";
echo "<p>Hollannin pääkaupunki on {$paakaupungit["Hollanti"]}</p>";
echo "<p>Unkarin pääkaupunki on {$paakaupungit["Unkari"]}</p>";

/**************
 *  Tehtävä 9  *
 **************/
echo "<h3>Tehtävä 9</h3>";

print_r(array(3, 5, 9));

echo "<br><br>";

$lukutaulukko = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

print_r($lukutaulukko);

echo "<br><br>";

print_r($paakaupungit);

?>

</body>
</html>