<?php

require("includes/bdd.php");

/**
 * MODÈLE
 * 
 * Le modèle contient des fonctions permettant de faire les requêtes SQL nécessiares au projet et de retourner les résultats
 */

 function getUtilisateurs(){
    global $bdd;

    $sql = "SELECT *
            FROM utilisateurs";

    return mysqli_query($bdd, $sql);
 }

 function getTypeComptes(){
    global $bdd;

    $sql = "SELECT * 
            FROM compte_types";

    return mysqli_query($bdd, $sql);
 }

 function ajouterUnUtilisateur($prenom, $nom, $naissance, $pseudonyme, $mot_de_passe, $compte_type_id){
    global $bdd;

    $sql = "INSERT INTO utilisateurs
            (prenom, nom, date_naissance, pseudonyme, mot_de_passe, compte_type_id)
            VALUES ('$prenom', '$nom', '$naissance', '$pseudonyme', '$mot_de_passe', $compte_type_id)";

    return mysqli_query($bdd, $sql);
 }