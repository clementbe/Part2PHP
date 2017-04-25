<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo7p2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            //déclaration de ma variable
            $maVariable = FALSE;
            //Si ma variable est en false le message 'C'est pas bon !!!' s'affiche
            if ($maVariable == false) {
                echo 'c\'est pas bon !!!' ;
            }
            //sinon le message 'c'est ok s'affiche
            else {
                echo  'c\'est ok !!';
            }
            ?>
        </p>
    </body>
</html>