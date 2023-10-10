<?php

require("models/site.model.php");

/**
 * CONTRÔLEUR
 * 
 * Le contrôleur fait le "pont" entre la route demandée par le navigateur et la réponse à retourner. 
 */

 

function index(){
    // tous les utilisateurs
    $utilisateurs = getUtilisateurs();
    include("views/index.view.php");

}

function nousJoindre(){
    include("views/nous-joindre.view.php");
}

function creerCompte(){
    $type_comptes = getTypeComptes();
    
    include("views/creer-compte.view.php");
}

function creerCompteSubmit(){
    // Valider
    if(empty($_POST["prenom"]) ||
        empty($_POST["nom"]) ||
        empty($_POST["naissance"]) ||
        empty($_POST["pseudonyme"]) ||
        empty($_POST["mdp"]) ||
        empty($_POST["compte_type_id"])) {
            header("location: creer-compte.php?infos_manquantes=1");
            exit();
        }   

        // Envoyer ces infos vers le modèle
        $succes = ajouterUnUtilisateur($_POST["prenom"], $_POST["nom"], $_POST["naissance"], $_POST["pseudonyme"], $_POST["mdp"], $_POST["compte_type_id"]);

    // Tout dépendant de la réponse du modèle, on redirige
}