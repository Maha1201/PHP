<?php
    // Récupération des valeurs :
    $id = (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null;
    $title = (isset($_POST['title']) && $_POST['title'] != "") ? $_POST['title'] : Null;
    $artist = (isset($_POST['artist']) && $_POST['artist'] != "") ? $_POST['artist'] : Null;
    $year = (isset($_POST['year']) && $_POST['year'] != "") ? $_POST['year'] : Null;
    $genre = (isset($_POST['genre']) && $_POST['genre'] != "") ? $_POST['genre'] : Null;
    $label = (isset($_POST['label']) && $_POST['label'] != "") ? $_POST['label'] : Null;
    $price = (isset($_POST['price']) && $_POST['price'] != "") ? $_POST['price'] : Null;
    //$picture = (isset($_POST['picture']) && $_POST['picture'] != "") ? $_POST['picture'] : Null;


    //if(isset($_FILES['file'])){
    //    $tmpName = $_FILES['file']['tmp_name'];
    //    $name = $_FILES['file']['name'];
    //}
    //move_uploaded_file($tmpName,'./img/'.$name);

    $uploads_dir = 'img/';
    $name = $_FILES["file"]["name"];

    if (move_uploaded_file($tmp_name, "$uploads_dir/$name")) {
        print "Uploaded successfully!";
    } else {
        print "Upload failed!";
    }



    // En cas d'erreur, on renvoie vers le formulaire
    if ($id == Null) {
        header("Location: discs.php");
    }
    elseif ($artist == Null || $year == Null || $title == Null || $genre == Null || $label == Null || $price == Null || $picture == Null) {
        header("Location: disc_form.php?id=".$id);
        exit;
    }

    // Si la vérification des données est ok :
    require "db.php"; 
    $db = connexionBase();

    try {
        // Construction de la requête UPDATE sans injection SQL :
        $requete = $db->prepare("UPDATE disc JOIN artist ON disc.artist_id = artist.artist_id
                                 SET disc_title = :title, disc_year = :year, disc_genre = :genre, disc_label = :label, disc_price = :price, disc_picture = :picture, artist_name = :artist
                                 WHERE disc_id = :id;");

        $requete->bindValue(":id", $id, PDO::PARAM_INT);
        $requete->bindValue(":title", $title, PDO::PARAM_STR);
        $requete->bindValue(":artist", $artist, PDO::PARAM_STR);
        $requete->bindValue(":year", $year, PDO::PARAM_INT);
        $requete->bindValue(":genre", $genre, PDO::PARAM_STR);
        $requete->bindValue(":label", $label, PDO::PARAM_STR);
        $requete->bindValue(":price", $price, PDO::PARAM_STR);
        $requete->bindValue(":picture", $picture, PDO::PARAM_STR);

        $requete->execute();
        $requete->closeCursor();
    }

    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_disc_modif.php)");
    }

    // Si OK: redirection vers la page accueil
    header("Location: discs.php");
    exit;
?>