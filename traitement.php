<?php
require_once("connexion.php");

if (isset($_POST['envoyer']) && !empty($_POST['envoyer'])){
    //Exemple d'une insertion
	// $requete = "INSERT INTO `utilisateur` (`nom`, `prenom`, `email`) 
	// VALUES ('".$_POST['nom']."', '".$_POST['prenom']."','". $_POST['email']."')";
    // $connexion->query($requete);
}

// header('Location: ../index.php');