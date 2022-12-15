<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour</title>
 </head>

    <body>
        <?php


        // 1 : Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...
        for($a = 1; $a < 150; $a = $a + 2){
            echo "$a, ";
        }

        // 2 : Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers
        for($a = 1; $a < 501; $a++){
            echo "Je dois faire des sauvegardes régulières de mes fichiers<br>";
        }
        ?>

        <!-- 3 : Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML. Le résultat doit être le suivant : -->
        <table>
            <thead>
                <?php
                    for($a = 0 ; $a < 13 ; $a++){
                        echo "<th>$a</th> ";
                    }
                ?>
            </thead>

            <tbody>
                <tr>
                    <?php
                        for($a = 0 ; $a < 13 ; $a++){
                            echo "<td> 0 </td> ";
                        }
                    ?>
                </tr>
                <?php
                    for($b = 2 ; $b < 13 ; $b++){
                        echo "<tr>";
                            for($a = 0 ; $a < 13 ; $a++){
                                echo "<td>" . $b*$a . "</td>";
                            } 
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>        
    </body>

</html>