
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/styless.css">
</head>
<body>
    
    <div>
        <ul>
            <?php if($_SESSION["user_connect"]["role"]=="adh"):?>
                <li><a href="index.php?x=9">DEMANDES</a></li>
                <li><a href="index.php?x=10&mode=all">PRETS</a></li>
            <?php endif?>
            <?php if($_SESSION["user_connect"]["role"]=="RP"):?>
                <li><a href="index.php?x=6&mode=all&y=z">PRETS</a></li>
                <li><a href="index.php?x=7">ADHERENTS RETARDATAIRES</a></li>
            <?php endif?>
            <?php if($_SESSION["user_connect"]["role"]=="RB"):?>
                <li><a href="index.php?x=1&mode=all">OUVRAGES</a></li>
                <li><a href="index.php?x=2">AUTEURS</a></li>
                <li><a href="index.php?x=3">RAYONS</a></li>
                <li><a href="index.php?x=4&mode=all">EXEMPLAIRES</a></li>
                <li><a href="index.php?x=5">DEMANDES</a></li>
            <?php endif?>
            <li><a href="index.php?x=8">SE DECONNECTER</a></li>
        </ul>
    </div>
    <?php 
        echo $content_view;
    ?>
</body>
</html>











