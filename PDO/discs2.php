<?php
    include "db.php";
    $db = connexionBase();

    $requete = $db->query("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id;");
    $tableauD = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="discs.css">
    <title>Disc - Liste</title>
</head>
<body>
<div class="container">
    <div class="row p-3">
        <h1 class="col-10">Liste des disques (15)</h1>
        <a href="disc_new.php" class="btn btn-danger col-1">Ajouter</a>
    </div>

    <div class="card-group">
        <?php foreach ($tableauD as $disc): ?>
            <div class="col-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/<?=$disc->disc_picture?>" class="img-fluid rounded-start m-auto" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title"><?= $disc->disc_title ?></h3>
                                    <p class="card-text"><span class="fs-4"><?= $disc->artist_name ?><br></span>
                                                        <span class="fw-bold">Label : </span><?= $disc->disc_label ?><br>
                                                        <span class="fw-bold">Year : </span><?= $disc->disc_year ?><br>
                                                        <span class="fw-bold">Genre : </span><?= $disc->disc_genre ?><br></p>
                                    <p class="card-text"><small class="text-muted"><a href="disc_detail.php?id=<?= $disc->disc_id?>" class = "btn btn-danger">Détails</a></small></p>
                            </div>
                        </div>  
                    </div>   
                </div>
            </div>
    

        <?php endforeach; ?>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>