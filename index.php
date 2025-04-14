<?php
// Funktio, joka listaa kaikki .php-tiedostot kansioista rekursiivisesti
function listaaTiedostot($dir) {
    $ffs = scandir($dir);

    echo '<ul>';
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..') {
            if(is_dir($dir.'/'.$ff)) {
                echo '<li><strong>Kansio: ' . htmlspecialchars($ff) . '</strong>';
                listaaTiedostot($dir.'/'.$ff); // kutsutaan rekursiivisesti alikansioon
                echo '</li>';
            } else {
                if (pathinfo($ff, PATHINFO_EXTENSION) === 'php') {
                    $link = htmlspecialchars($dir.'/'.$ff);
                    echo '<li><a href="'.$link.'">'.$link.'</a></li>';
                }
            }
        }
    }
    echo '</ul>';
}
?>

    <!DOCTYPE html>
    <html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Projektin sivut listattuna</title>
</head>
<body>
<h2>Projektin kaikki PHP-sivut</h2>
<?php listaaTiedostot('.'); ?>
</body>
    </html><?php
