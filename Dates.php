<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
 </head>

    <body>

    <?php

        // 1 - Trouvez le numéro de semaine de la date suivante : 14/07/2019 :

        $ex1 = "14-07-2019";

        echo "Semaine numéro : " . date("W", strtotime($ex1)) . "<br><br>";


        // 2 - Combien reste-t-il de jours avant la fin de votre formation ?

        $datetime_1 = '2022-12-15 11:15:30'; 
        $datetime_2 = '2023-02-03 17:00:00'; 
 
        $start_datetime = new DateTime($datetime_1); 
        $diff = $start_datetime->diff(new DateTime($datetime_2)); 

        echo $diff->days.' Jours<br>'; 
        echo $diff->y.' Années<br>'; 
        echo $diff->m.' Mois<br>'; 
        echo $diff->d.' Jours<br>'; 
        echo $diff->h.' Heures<br>'; 
        echo $diff->i.' Minutes<br>'; 
        echo $diff->s.' Secondes<br><br>';


        // 3 - Comment déterminer si une année est bissextile ? 

        $annee = 2023;  

        if(0 == $annee % 4){
        echo "$annee est une année bissextile<br><br>";    
        }
        else{  
        echo "$annee n'est pas une année bissextile <br><br>";    
        }

        // 4 - Montrez que la date du 32/17/2019 est erronée.

        $jour = 32;
        $mois = 17;
        $annee = 2019;

        $verif = checkdate($mois, $jour, $annee);

        if($verif){
            echo "La date est correcte <br><br>";
        }
        else{
            echo "La date est incorrecte <br><br>";
        }

        // 5 - Affichez l'heure courante sous cette forme : 11h25.


        $ajd = new DateTime();
        $heure5 = $ajd -> format("H");
        $minutes5 = $ajd -> format("i");
        echo $heure5 . "h" . $minutes5 . "<br><br>";

        // 6 - Ajoutez 1 mois à la date courante.

        $newDate = date('Y-m-d', strtotime('+ 1 month'));

        echo $newDate . "<br><br>";

        // 7 - Que s'est-il passé le 1000200000 ?

        $secondes = 1000200000;
        echo date('Y/m/d H:i:s', $secondes);


    ?>

    </body>

</html>