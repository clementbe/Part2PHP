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
            $maVariable = TRUE;
            //Si ma variable est en true le message 'C'est ok !!!' s'affiche
            if ($maVariable) {
                echo 'c\'est ok !!!' ;
            }
            //sinon le message 'c'est pas bon' s'affiche
            else {
                echo  'c\'est pas bon !!!';
            }
            ?>
        </p>
    </body>
</html>