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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="discs.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disque Ajout</title>
</head>
<body>

    <h1 class="p-2">Ajouter un vinyle</h1>

    <form action ="script_disc_ajout.php" method="post" class="p-2">

        <label for="label_title">Title</label><br>
        <input type="text" name="title" id="label_title" placeholder="Enter title">
        <br><br>

        <label for="label_artist">Artist</label><br>
        <select name="artist" id="label_artist">

        <?php foreach ($tableauD as $disc): ?>
            <option value="<?= $disc->artist_id ?>"><?= $disc->artist_name ?></option>
        <?php endforeach; ?>

        </select>
        <br><br>

        <label for="label_year">Year</label><br>
        <input type="text" name="year" id="label_year" placeholder="Enter year">
        <br><br>

        <label for="label_genre">Genre</label><br>
        <input type="text" name="genre" id="label_genre" placeholder="Enter genre (Rock, Pop, Prog ...)">
        <br><br>

        <label for="label_label">Label</label><br>
        <input type="text" name="label" id="label_label" placeholder="Enter label(EMI, Warner, PolyGram, Univers sale ...)">
        <br><br>

        <label for="label_price">Price</label><br>
        <input type="text" name="price" id="label_price">
        <br><br>

        <label for="picture">Picture</label>
        <input type="file" name="picture" id="picture">
        <br><br>

        <button class="btn btn-rose">Ajouter</button> 
        <a href="discs.php" class="btn btn-rose">Retour</a>


    </form>
    


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>