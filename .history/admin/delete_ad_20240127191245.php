<?php
require_once ('connexion.php');

//recupération de l'id
if(isset($_GET['id']) AND !empty($_GET['id'])){
    //Caster avec int
    $id =(int)$_GET['id'];
    $recupAerticles = $conn->prepare('SELECT * FROM admin WHERE id = :id');
    //Sécuriser contre les injections sql
    $recupAerticles->bindValue(":id", $id, PDO::PARAM_INT);
    $recupAerticles->execute();
    if($recupAerticles->rowCount() > 0){
        $supprimArticles = $conn->prepare('DELETE FROM avis_clients WHERE id = ?');
        $supprimArticles->execute(array($id));
        header('location:fetch_reviews.php');
    }
}

?>