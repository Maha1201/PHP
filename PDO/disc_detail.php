<?php
    require "db.php";
    $db = connexionBase();

    $id = $_GET["id"];
    $requete = $db->prepare("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id WHERE disc_id=?");
    $requete->execute(array($id));
    $tableauD = $requete->fetch(PDO::FETCH_OBJ);
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
    <title>Détails</title>
</head>
<body>

<div class="container">
    <div class="row p-3">

        <h1>Disque n°<?= $tableauD->disc_id; ?></h1>

    </div>

    <br>

    <div class="d-flex justify-content-center">
        <form action ="" method="post">

            <input type="hidden" name="id" value="<?= $tableauD->disc_id ?>">

            <label for="label_title2">Title</label><br>
            <input type="text" name="title" id="label_title2" value=" <?= $tableauD->disc_title ?>" disabled>
            <br><br>

            <label for="label_artist2">Artist</label><br>
            <input type="text" name="artist" id="label_artist2" value=" <?= $tableauD->artist_name ?>" disabled>
            <br><br>

            <label for="label_year2">Year</label><br>
            <input type="text" name="year" id="label_year2" value=" <?= $tableauD->disc_year ?>" disabled>
            <br><br>

            <label for="label_genre2">Genre</label><br>
            <input type="text" name="genre" id="label_genre2" value=" <?= $tableauD->disc_genre ?>" disabled>
            <br><br>

            <label for="label_label2">Label</label><br>
            <input type="text" name="label" id="label_label2" value=" <?= $tableauD->disc_label ?>" disabled>
            <br><br>

            <label for="label_price2">Price</label><br>
            <input type="text" name="price" id="label_price2" value=" <?= $tableauD->disc_price ?>" disabled>
            <br><br>

            <p>Picture</p>

            <img src="img/<?=$tableauD->disc_picture?>" class="img-fluid rounded-start mt-" alt="Image">

            <br><br>

            <div class="d-flex justify-content-center">
            <a href="disc_form.php?id=<?= $tableauD->disc_id?>" class="btn btn-rose m-2">Modifier</a>
            <a href="script_disc_delete.php?id=<?= $tableauD->disc_id?>" class="btn btn-rose m-2">Supprimer</a>
            <a href="discs.php" class="btn btn-rose m-2">Annuler</a>
            </div>
            <br><br>
            
        </form>

    </div>
</div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>