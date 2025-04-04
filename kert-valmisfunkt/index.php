<!DOCTYPE html>
<html lang="fi">
<head>
<title>Tehtäviä: Kertausta ja valmisfunktioita</title>
</head>
<body>

<?php

/**************
*  Tehtävä 1  *
**************/
echo "<h3>Tehtävä 1</h3>";
?>

<form action="index.php" method="post">
    <label>
    <input type="text" name="luku1"  size="5">
    <select name="laskutoimitus">
    <option value="1">+</option>
    <option value="2">-</option>
    <option value="3">*</option>
    <option value="4">/</option>
    </select>
    <input type="text" name="luku2" size="5"><br>
    <input type="submit" name="tehtava1">
    </label>
</form>

<?php

if(isset($_POST["tehtava1"])) {
	$luku1 = $_POST["luku1"];
	$luku2 = $_POST["luku2"];
	$laskutoimitus = $_POST["laskutoimitus"];	// 1 = yhteenlasku, 2 = vähennyslasku, 3 = kertolasku, 4 = jakolasku
    switch($laskutoimitus) {
        case "1":
            $tuotto = $luku1 + $luku2;
            $merkki = "+";
            break;
        case "2":
            $tuotto = $luku1 - $luku2;
            $merkki = "-";
            break;
        case "3":
            $tuotto = $luku1 * $luku2;
            $merkki = "*";
            break;
        case "4":
            if($luku2 != 0) {
                $tuotto = $luku1 / $luku2;
            } else {
                $tuotto = "Nollalla ei voi jakaa!";
            }
            $merkki = "/";
            break;
        default:
            $tuotto = "Tuntematon laskutoimitus";
            $merkki = "?";
            break;
    }

    echo "<p>$luku1 $merkki $luku2 = $tuotto </p>";
}


/**************
*  Tehtävä 2  *
**************/
echo "<h3>Tehtävä 2</h3>";
$i = 1;
while ($i <= 10) {
    echo $i;
    if ($i < 10) {
        echo "-";
    }
    $i++;
}

/**************
*  Tehtävä 3  *
**************/
echo "<h3>Tehtävä 3</h3>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Luku $i on parillinen.<br>";
    } else {
        echo "Luku $i on pariton.<br>";
    }
}



/**************
*  Tehtävä 4  *
**************/
echo "<h3>Tehtävä 4</h3>";

$lukutaulukko = array(6, 29, 10, 2, 8, 24, 17);

echo "Taulukon pituus: " . count($lukutaulukko);
echo "<br>";
echo "Taulukon arvot: " . join(", ", $lukutaulukko);
echo "<br>";
sort($lukutaulukko);
echo "Taulukon arvot pienimmästä suurimpaan: " . join(", ", $lukutaulukko);
echo "<br>";
rsort($lukutaulukko);
echo "Taulukon arvot suurimmasta pienimpään: " . join(", ", $lukutaulukko);
echo "<br>";


/**************
*  Tehtävä 5  *
**************/
echo "<h3>Tehtävä 5</h3>";
?>

<form action="index.php" method="post">
    <label>
        Anna merkkijono:
        <input type="text" name="merkkijono">
        <input type="submit" name="tehtava5">
    </label>
</form>

<?php

if(isset($_POST["tehtava5"])) {

	$merkkijono = $_POST["merkkijono"];
	
	// kirjoita koodisi alle oleviin tulostuslauseisiin
	echo "Merkkijono kokonaan pienillä kirjaimilla: " . strtolower($merkkijono) . "<br>";
	echo "Merkkijono kokonaan isoilla kirjaimilla: " . strtoupper($merkkijono) . "<br>";
	echo "Merkkijono lopusta alkuun: " . strrev($merkkijono) . "<br>";
	echo "Merkkijonon pituus: " . strlen($merkkijono) . "<br>";
	echo "Jokainen sana omalle rivilleen: <br>" . str_replace(" ", "<br>", $merkkijono) . "<br>";
	
}

/**************
*  Tehtävä 6  *
**************/
echo "<h3>Tehtävä 6</h3>";
?>

<form action="index.php" method="post">
    <label>
        Anna luvut (välilyönnillä erotettuina):
        <input type="text" name="lukujono">
        <input type="submit" name="tehtava6">
    </label>
</form>

<?php

if(isset($_POST["tehtava6"])) {
	
	$lukujono = $_POST["lukujono"];
	$lukutaulukko = explode(" ", $lukujono);
	
	$summa = array_sum($lukutaulukko);

    $lukumaara = count($lukutaulukko);
    $keskiarvo = $summa / $lukumaara;

    echo "Luvut: " . join(", ", $lukutaulukko) . "<br>";
    echo "Summa: $summa<br>";
    echo "Keskiarvo: $keskiarvo<br>";

}

?>

</body>
</html>