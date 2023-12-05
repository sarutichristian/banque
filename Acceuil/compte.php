<?php

include '../configuration/config.php';
include '../SRC/cpt.php';

// $numCompte = $_POST['numCompte'];
$nomCompte = $_POST['nomCompte'];
$prenomCompte = $_POST['prenomCompte'];
$nom_familleCompte = $_POST['nom_familleCompte'];
$adresseCompte = $_POST['adresseCompte'];
$dateNaissance = $_POST['dateNaissance'];
$villeCompte = $_POST['villeCompte'];
$numTelCompte = $_POST['numTelCompte'];
$emailCompte = $_POST['emailCompte'];

$compte = new Compte ($nomCompte, $prenomCompte, $nom_familleCompte, $adresseCompte, $dateNaissance, $villeCompte, $numTelCompte, $emailCompte);
if ($compte -> creerCompte()){
    header("Location:../Acceuil/acceuil.php");
}