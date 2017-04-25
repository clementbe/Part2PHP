<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo6p2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            //déclaration de ma variable
            $monAge = 19;
            //si le chiffre et egale ou supperieur a 18 le message tu es majeur s'affiche
            if ($monAge >= 18) {
            echo 'Tu es majeur'; 
            }
            //sinon tu n'est pas majeur
            else {
                echo 'Tu n\'es pas majeur';
            }
            ?>
        </p>
    </body>
</html>