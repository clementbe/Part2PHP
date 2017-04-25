<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo5p2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            //Déclaration de la varible
            $maVariable = 'Homme';
            //si c'est un Homme le message 'cest un developpeur' s'affiche
            if ($maVariable != 'Homme') {
                echo 'C\'est un développeur !!!';
            }
            //si c'est un Femme le message 'cest un developpeur' s'affiche
            else {
                echo 'C\'est une développeuse !!!';
            }
         
            ?>
        </p>
    </body>
</html>