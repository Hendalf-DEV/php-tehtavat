<!DOCTYPE html>
<html>
<head>
	<title>Autolomake</title>
</head>
<body>
	<h4>Syötä auton tiedot:</h4>
	<form action="autolomake.php" method="post">
		<input type="text" name="rekisteri" placeholder="Rekisterinro"/><br><br>
		<input type="text" name="vari" placeholder="Väri"/><br><br>
		<input type="text" name="vuosimalli" placeholder="Vuosimalli"/><br><br>
		<select name="omistaja" >
            <?php
            $tunnus = 'localhost';
            $kayttaja = 'root';
            $salasana = '';

            $yhteys = mysqli_connect($tunnus, $kayttaja, $salasana, 'autot');

            if ($yhteys->connect_errno) {
                echo "Yhteysvirhe: " . $yhteys->connect_errno;
            }
            $haku = "SELECT hetu, nimi FROM henkilo";
            $result = mysqli_query($yhteys, $haku);

            while ($rivi = mysqli_fetch_assoc($result)) {
                echo "<option value='{$rivi['hetu']}'>{$rivi['nimi']}</option>";
            }

            mysqli_close($yhteys);
            ?>
		</select><br><br>
		<input type="submit" name="lisays" value="Lisää auto"><br><br>
	</form>
    <?php
    if (isset($_POST["lisays"])) {
        $rekisteri = $_POST["rekisteri"];
        $vari = $_POST["vari"];
        $vuosimalli = $_POST["vuosimalli"];
        $omistaja = $_POST["omistaja"];

        $tunnus = 'localhost';
        $kayttaja = 'root';
        $salasana = '';

        $yhteys = mysqli_connect($tunnus, $kayttaja, $salasana, 'autot');

        if ($yhteys->connect_errno) {
            echo "Yhteysvirhe: " . $yhteys->connect_errno;
        }

        if (empty($rekisteri)) {
            echo "<p>Rekisterinumero ei voi olla tyhjä.</p>";
        } else {
            $tarkistus = "SELECT * FROM auto WHERE rekisterinro = '$rekisteri'";
            $tulokset = mysqli_query($yhteys, $tarkistus);
            if (mysqli_num_rows($tulokset) > 0) {
                echo "<p>Virhe: Rekisterinumero käytössä!</p>";
            } else {
                $lisays = "INSERT INTO auto (rekisterinro, vari, vuosimalli, omistaja) VALUES ('$rekisteri', '$vari', '$vuosimalli', '$omistaja')";
                if (mysqli_query($yhteys, $lisays)) {
                    echo "Auto lisätty onnistuneesti.";
                } else {
                    echo "Virhe lisättäessä autoa: " . mysqli_error($yhteys);
                }
            }
        }

        mysqli_close($yhteys);
    }
    ?>
	</body>
</html>