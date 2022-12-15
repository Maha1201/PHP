<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux</title>
 </head>

    <body>

    <!--1 - Mois de l'année non bissextile-->
    <?php
    $mois = array("Janvier" => 31, 
                  "Février" => 28, 
                  "Mars" => 31, 
                  "Avril" => 30, 
                  "Mai" => 31, 
                  "Juin" => 30, 
                  "Juillet" => 31, 
                  "Aout" => 30, 
                  "Septembre" => 31, 
                  "Octobre" => 30, 
                  "Novembre" => 31, 
                  "Décembre" => 30); 

    asort($mois);

    foreach($mois as $cle => $valeur){
        echo $cle . " : " .$valeur . "<br>";
    }

    ?>
    </body>

</html>