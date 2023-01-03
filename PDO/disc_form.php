<?php
    require "db.php";
    $db = ConnexionBase();

    $requete = $db->prepare("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id WHERE disc_id=?;");
    $requete->execute(array($_GET["id"]));
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
    <title>Modifications</title>
</head>
<body>

<div class="container">
    <div class="row p-3">

        <h1>Disque n°<?= $tableauD->disc_id; ?></h1>

    </div>

    <br>

    <div class="d-flex justify-content-center">
        <form action ="script_disc_modif.php" method="post" enctype="multipart/form-data">

            <input type="text" name="id" value="<?=$tableauD->disc_id?>" hidden>

            <label for="title">Title</label><br>
            <input type="text" name="title" value="<?=$tableauD->disc_title?>">
            <br><br>

            <label for="artist">Artist</label><br>
            <input type="text" name="artist" value="<?=$tableauD->artist_name?>">
            <br><br>

            <label for="year">Year</label><br>
            <input type="text" name="year" value="<?=$tableauD->disc_year?>">
            <br><br>

            <label for="genre">Genre</label><br>
            <input type="text" name="genre" value="<?=$tableauD->disc_genre?>">
            <br><br>

            <label for="label">Label</label><br>
            <input type="text" name="label" value="<?=$tableauD->disc_label?>">
            <br><br>

            <label for="price">Price</label><br>
            <input type="text" name="price" value="<?=$tableauD->disc_price?>">
            <br><br>

            <label for="picture">Picture</label>
            <input type="file" name="picture" id="picture">

            <br><br>

            <img src="img/<?=$tableauD->disc_picture?>" class="img-fluid rounded-start mt-" alt="Image">


            <br><br>

            <div class="d-flex justify-content-center">
            <input type="submit" class="btn btn-rose m-2 col-2" value="Modifier">
            <a href="disc_detail.php?id=<?= $tableauD->disc_id?>" class="btn btn-rose m-2">Retour</a>
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