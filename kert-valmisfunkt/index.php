<!DOCTYPE html>
<html>
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
<input type="text" name="luku1" size="5">
<select name="laskutoimitus">
<option value="1">+</option>
<option value="2">-</option>
<option value="3">*</option>
<option value="4">/</option>
</select>
<input type="text" name="luku2" size="5"><br>
<input type="submit" name="tehtava1">
</form>

<?php

if(isset($_POST["tehtava1"])) {
	$luku1 = $_POST["luku1"];
	$luku2 = $_POST["luku2"];
	$laskutoimitus = $_POST["laskutoimitus"];	// 1 = yhteenlasku, 2 = vähennyslasku, 3 = kertolasku, 4 = jakolasku
	
	// kirjoita koodisi tähän
}


/**************
*  Tehtävä 2  *
**************/
echo "<h3>Tehtävä 2</h3>";

// kirjoita koodisi tähän

/**************
*  Tehtävä 3  *
**************/
echo "<h3>Tehtävä 3</h3>";

// kirjoita koodisi tähän


/**************
*  Tehtävä 4  *
**************/
echo "<h3>Tehtävä 4</h3>";

$lukutaulukko = array(6, 29, 10, 2, 8, 24, 17);

// kirjoita koodisi alle oleviin tulostuslauseisiin (ja tarvittaessa niiden väleihin)
echo "Taulukon pituus: ";
echo "<br>";
echo "Taulukon arvot: ";
echo "<br>";
echo "Taulukon arvot pienimmästä suurimpaan: ";
echo "<br>";
echo "Taulukon arvot suurimmasta pienimpään: ";
echo "<br>";


/**************
*  Tehtävä 5  *
**************/
echo "<h3>Tehtävä 5</h3>";
?>

<form action="index.php" method="post">
Anna merkkijono: <input type="text" name="merkkijono">
<input type="submit" name="tehtava5">
</form>

<?php

if(isset($_POST["tehtava5"])) {

	$merkkijono = $_POST["merkkijono"];
	
	// kirjoita koodisi alle oleviin tulostuslauseisiin
	echo "Merkkijono kokonaan pienillä kirjaimilla: <br>";
	echo "Merkkijono kokonaan isoilla kirjaimilla: <br>";
	echo "Merkkijono lopusta alkuun: <br>";
	echo "Merkkijonon pituus: <br>";
	echo "Jokainen sana omalle rivilleen:<br>";
	
}

/**************
*  Tehtävä 6  *
**************/
echo "<h3>Tehtävä 6</h3>";
?>

<form action="index.php" method="post">
Anna luvut (välilyönnillä erotettuina): <input type="text" name="lukujono">
<input type="submit" name="tehtava6">
</form>

<?php

if(isset($_POST["tehtava6"])) {
	
	$lukujono = $_POST["lukujono"];
	$lukutaulukko = explode(" ", $lukujono);
	
	// kirjoita koodisi tähän
	
}

?>

</body>
</html>