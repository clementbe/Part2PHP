<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo1p2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
        <?php
        //Création d'une variable avec une valeur de 4
        $age = 4;
        //Affichage de la valeur
        echo $age . ' ans ';
        //Si la valeur est suppérieur a 18, le message "vous etes majeur" s'affiche
        if ( $age >= 18 ){
            echo 'vous êtes majeur';
        }      
        //Si la valeur est inferieur a 0, le message "vous existez pas" s'affiche
        else if ($age <= 0){ 
                echo 'vous existez pas';
        }
       //Si la valeur et inferieur a 18, le message "vous etes mineur" s'affiche
        else {
            echo 'vous etes mineur';
        }
        ?>
        </p>
    </body>
</html>