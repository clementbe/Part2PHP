<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo3p2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            //création des deux variables age et genre 
            $age = 19;
            $genre = 'Femme';
            //Si l'age est supperieur que 18 et que le genre et Homme 'vous etes un homme et majeur' s'affiche
            if ($age >= 18 && $genre == 'Homme') {
                echo 'vous etes un homme et majeur';
            }
            //Si l'age est inferieur de 18 et que le genre et Homme 'vous etes un homme et mineur' s'affiche
            elseif ($age < 18 && $genre == 'Homme') {
                echo 'vous etes un homme et mineur';
            }
            //Si l'age est supperieur de 18 et que le genre et Femme 'vous etes un Femme et majeur' s'affiche
            elseif ($age >= 18 && $genre == 'Femme') {
                echo 'Vous etes une femme et majeur';
            }
            //Si l'age est inferieur de 18 et que le genre et Femme 'vous etes un Femme et mineur' s'affiche
            elseif ($age < 18 && $genre == 'Femme') {
                echo 'Vous etes une femme et majeur';
            }
            ?>
        </p>
    </body>
</html>