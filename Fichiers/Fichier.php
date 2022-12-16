<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichiers</title>
</head>
<body>
    
    <?php
    
    
    $lien = file('file:///home/stagiaire/Bureau/PHP/Fichiers/liens.txt');
     
    foreach ($lien as $lien_num => $liens) {
        echo "<a href = " . $liens . ">" . "Lien numéro " . $lien_num . "</a> <br><br>"; 
    }


    ?>

</body>
</html>