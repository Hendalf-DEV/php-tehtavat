<!DOCTYPE html>
<html>
<head>
    <title>Tehtäviä: Sivuparametrit</title>
</head>
<body>

<?php

/**************
 *  Tehtävä 1  *
 **************/
echo "<h3>Tehtävä 1</h3>";
?>

<a href="index.php?tekno=html">HTML</a><br>
<a href="index.php?tekno=css">CSS</a><br>
<a href="index.php?tekno=javascript">Javascript</a><br>
<a href="index.php?tekno=php">PHP</a><br>
<a href="index.php?tekno=java">Java</a><br>

<?php

if (isset($_GET["tekno"])) {
    $tekno = $_GET["tekno"];
    echo "<p>";
    echo match ($tekno) {
        "html" => "HTML kuvaa dokumentin rakenteen.",
        "css" => "CSS määrittää dokumentin ulkoasun.",
        "javascript" => "Javascript on selainpuolen kieli.",
        "php" => "PHP on palvelinpuolen kieli.",
        default => "Haluamaasi teknologiaa ei löydy.",
    };
    echo "</p>";

}

/**************
 *  Tehtävä 2  *
 **************/
echo "<h3>Tehtävä 2</h3>";
?>

<form action="index.php" method="post">
    Etunimi: <input type="text" name="etunimi"><br>
    Sukunimi: <input type="text" name="sukunimi"><br>
    <input type="submit" name="tehtava2">
</form>

<?php

if (isset($_POST["tehtava2"])) {
    $etunimi = $_POST["etunimi"];
    $sukunimi = $_POST["sukunimi"];

    echo "<p>Etunimi: $etunimi<br>Sukunimi: $sukunimi</p>";
}


/*******************
 *  Tehtävät 3 + 4  *
 *******************/
echo "<h3>Tehtävät 3 ja 4</h3>";
?>

<form action="index.php" method="post">
    Nimi * <input type="text" name="nimi"><br>
    Sähköposti * <input type="text" name="sposti"><br>
    Salasana * <input type="password" name="salasana"><br>
    Sukupuoli
    <input type="radio" name="sukupuoli" value="mies" checked>Mies
    <input type="radio" name="sukupuoli" value="nainen">Nainen
    <input type="radio" name="sukupuoli" value="muu">Muu<br>
    Maakunta
    <select name="maakunta">
        <option value="Ahvenanmaa">Ahvenanmaa</option>
        <option value="Etelä-Karjala">Etelä-Karjala</option>
        <option value="Etelä-Pohjanmaa">Etelä-Pohjanmaa</option>
        <option value="Etelä-Savo">Etelä-Savo</option>
        <option value="Kainuu">Kainuu</option>
    </select><br>
    Kuvaus<br>
    <textarea name="kuvaus"></textarea><br>
    <input type="hidden" name="liittymisvuosi" value="<?php echo date("Y"); ?>">
    <input type="submit" name="tehtava3" value="Rekisteröidy">
</form>

<?php

readonly class UserRegister

{
    public function __construct(
        public string $nimi,
        public string $sposti,
        public string $salasana,
        public string $sukupuoli,
        public string $maakunta,
        public string $kuvaus,
        public string $liittymisvuosi
    )
    {
    }

    public function checkData(): bool
    {
        return $this->nimi && $this->sposti && $this->salasana;
    }
}

class UserFormatter
{
    public function format(UserRegister $user): string
    {
        return "Nimi: {$user->nimi}<br>" .
            "Sähköposti: {$user->sposti}<br>" .
            "Salasana: {$user->salasana}<br>" .
            "Sukupuoli: {$user->sukupuoli}<br>" .
            "Maakunta: {$user->maakunta}<br>" .
            "Kuvaus: {$user->kuvaus}<br>" .
            "Liittymisvuosi: {$user->liittymisvuosi}";
    }
}

if (isset($_POST["tehtava3"])) {
    $userRegister = new UserRegister(
        $_POST["nimi"] ?? '',
        $_POST["sposti"] ?? '',
        $_POST["salasana"] ?? '',
        $_POST["sukupuoli"] ?? '',
        $_POST["maakunta"] ?? '',
        $_POST["kuvaus"] ?? '',
        $_POST["liittymisvuosi"] ?? ''
    );

    if ($userRegister->checkData()) {
        $formatter = new UserFormatter();
        echo "<p>{$formatter->format($userRegister)}</p>";
    } else {
        echo "Täytä kaikki tähdellä merkityt kentät.";
    }
}


/**************
 *  Tehtävä 5  *
 **************/
echo "<h3>Tehtävä 5</h3>";
?>

<form action="index.php" method="post">
    Nimi: <input type="text" name="nimi"><br>
    Otsikko: <input type="text" name="otsikko"><br>
    Teksti:<br>
    <textarea name="teksti"></textarea>
    <input type="submit" name="tehtava5">
</form>

<?php
if (isset($_POST["tehtava5"])) {

    $nimi = strip_tags($_POST["nimi"] ?? '');
    $otsikko = strip_tags($_POST["otsikko"] ?? '');
    $teksti = strip_tags($_POST["teksti"] ?? '');

    if ($nimi === '' || $otsikko === '' || $teksti === '') {
        echo "<p>Täytä kaikki kentät.</p>";
    } else {
        echo "<p><strong>{$otsikko} || {$nimi}</strong><br>{$teksti}</p>";
    }
}
?>

</body>
</html>