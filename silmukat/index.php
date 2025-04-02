<!DOCTYPE html>
<html>
<head>
    <title>Tehtäviä: Silmukat</title>
</head>
<p>

<?php

/**************
 *  Tehtävä 1  *
 **************/
echo "<h3>Tehtävä 1</h3>";

$i = 5;

while ($i > 0) {
    if ($i == 1) {
        echo "Daniel";
        break;
    }
    echo "Daniel\n";
    $i--;
}

/******************
 *  Tehtävät 2 + 3 *
 ******************/
echo "<h3>Tehtävät 2 ja 3</h3>";
?>

<form action="index.php" method="post">
    Anna yläraja: <input type="text" name="ylaraja"><br>
    <input type="submit" name="tehtava2">
</form>

<?php

if (isset($_POST["tehtava2"])) {
    $ylaraja = $_POST["ylaraja"];
//    $alku = 1;
    echo '<p>';
//    while ($ylaraja > 0) {
//        echo "$alku<br>";
//        $alku++;
//        $ylaraja--;
//    }
//    echo '</p>';

    for ($i = 1; $i <= $ylaraja; $i++) {
        echo "$i<br>";
    }
    echo '</p>';
}


/**************
 *  Tehtävä 4  *
 **************/
echo "<h3>Tehtävä 4</h3>";

$i = 1;
while ($i < 11) {
    $result = $i * 10;
    echo "$i x 10 = $result<br>";
    $i++;
}

/**************
 *  Tehtävä 5  *
 **************/
echo "<h3>Tehtävä 5</h3>";
?>

<form action="index.php" method="post">
    Alaraja: <input type="text" name="alaraja"><br>
    Yläraja: <input type="text" name="ylaraja"><br>
    <input type="submit" name="tehtava5">
</form>

<?php

if (isset($_POST["tehtava5"])) {
    $alku = (int)$_POST["alaraja"];
    $loppu = (int)$_POST["ylaraja"];
    $summa = 0;

    for ($i = $alku; $i <= $loppu; $i++) {
        $summa += $i;
    }

    echo "Lukusarjan summa on $summa.";
}


/**************
 *  Tehtävä 6  *
 **************/
echo "<h3>Tehtävä 6</h3>";

$lukutaulukko = [];

for ($i = 1; $i <= 20; $i++) {
    $lukutaulukko[] = $i;
}

/**************
 *  Tehtävä 7  *
 **************/
echo "<h3>Tehtävä 7</h3>";

echo '<p>';
foreach ($lukutaulukko as $luku) {
    echo "$luku<br>";
}
echo '</p>';

/**************
 *  Tehtävä 8  *
 **************/
echo "<h3>Tehtävä 8</h3>";

$paakaupungit = array("Italia" => "Rooma", "Tanska" => "Kööpenhamina", "Suomi" => "Helsinki", "Ranska" => "Pariisi", "Saksa" => "Berliini", "Kreikka" => "Ateena", "Irlanti" => "Dublin", "Hollanti" => "Amsterdam", "Espanja" => "Madrid", "Ruotsi" => "Tukholma", "Iso-Britannia" => "Lontoo", "Viro" => "Tallinna", "Unkari" => "Budapest", "Itävalta" => "Vienna", "Puola" => "Varsova");

echo "<p>";
foreach ($paakaupungit as $kieli => $paakaupunki) {
    echo "$kieli: $paakaupunki<br>";
}
echo "</p>"
?>
</body>
</html>