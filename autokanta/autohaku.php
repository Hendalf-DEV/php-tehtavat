<!DOCTYPE html>
<html>
<head>
	<title>Autohaku</title>
</head>
<body>
	<h4>Syötä rekisterinumero:</h4>
	<form action="" method="post">
		<input type="text" name="rekisterinro" /><br><br>
		<input type="submit" name="hae" /><br><br>
	</form>

    <?php

    $tunnus = 'localhost';
    $kayttaja = 'root';
    $salasana = '';

    $yhteys = mysqli_connect($tunnus, $kayttaja, $salasana, 'autot');

    if ($yhteys->connect_errno) {
        echo "Yhteysvirhe: " . $yhteys->connect_errno;
    }

    if (isset($_POST["hae"])) {
        $rekisterinro = $_POST["rekisterinro"];
        $haku = "SELECT * FROM auto WHERE rekisterinro = '$rekisterinro'";

        $result = mysqli_query($yhteys, $haku);
        while ($rivi = mysqli_fetch_assoc($result)) {
            echo $rivi['rekisterinro'] . " " . $rivi['vari'] . " " . $rivi['vuosimalli'] . " " . "<br>";
        }
    }
    ?>

	</body>
</html>