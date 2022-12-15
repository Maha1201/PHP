<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions</title>
 </head>

    <body>
        
    <?php

        // Ecrivez une fonction qui permette de générer un lien :

        function lien($url, $titre){
            echo "<a href = " . $url . ">" . $titre . "</a> <br><br>"; 
        }

        lien("https://www.reddit.com/", "Reddit Hug");

        // Ecrivez une fonction qui calcul la somme des valeurs d'un tableau :

        $tab = array(4, 3, 8, 2);

        function somme($tablo){
            echo "Le tableau contient " . array_sum($tablo) . " valeurs. <br><br>";
        }

        $resultat = somme($tab);

        // Créer une fonction qui vérifie le niveau de complexité d'un mot de passe

        function complex_password($mdp){
            if($mdp = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/"){
                $resultat = true;
                echo "Le mdp est " . $resultat;
            }
            else{
                $resultat = false;
                echo "Le mdp est " . $resultat;
            }
        }

        $resultat = complex_password("TopSecret42");


    ?>

    </body>

</html>