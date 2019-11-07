<?php
require('modele.php');

if (isset($_GET['id']) && $_GET['id'] > 0){
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);
    require('affichageAccueil.php');
} else {
    echo ("Erreur : aucun identifiant de billet envoyé");
}


