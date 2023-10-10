<?php

/**
 * Fichier de connexion à la BDD
 * 
 * Vérifiez que le bon nom de BDD est utilisée.
 */

// hôte
$hote = "localhost"; 
// nom d'utilisateur
$nom_utilisateur = "root"; 
// mot de passe
$mdp = ""; 
// nom de la bdd utilisée pour le projet
$nom_bdd = "pwd_cours21"; 

// Connexion
$bdd = mysqli_connect($hote, $nom_utilisateur, $mdp, $nom_bdd);

// Vérification de la connexion
if(!$bdd){
    echo "<h1>Connexion échouée à la BDD</h1>";
    echo "<h2 style='color: darkred;'>Message d'erreur:</h2>";
    echo "<h3>".mysqli_connect_error()."</h3>";
    exit();
}