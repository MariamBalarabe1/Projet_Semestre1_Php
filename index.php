<?php
    require_once("data.php");
    require_once("model.php");
    $dem=find_demandes();
    $pret=find_pret()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <?php
        require_once("liste.rayons.html.php");
        require_once("liste.dem.html.php");
        require_once("liste.ouvrages.html.php");
        require_once("liste.auteurs.html.php");
        require_once("liste.oeuvres.dispo.html.php");
        require_once("liste.prets.html.php");
        require_once("liste.ex.indis.html.php");
    ?> 
</body>
</html>