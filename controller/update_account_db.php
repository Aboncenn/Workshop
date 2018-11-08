<?php
require '../db/session.php';
require('../db/header.php');


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$mdp = $_POST['password'];
$id = $_SESSION['id'];

if(!empty($nom) AND !empty($prenom) AND !empty($telephone) AND !empty($email) AND !empty($mdp)) {
  $insertmbr = $db->prepare("UPDATE user SET nom = '$nom', prenom = '$prenom',telephone = '$telephone',mail = '$email',mot_de_passe = '$mdp'  WHERE id = '$id'");
  $insertmbr->execute();
  $erreur = "Votre compte a été mis à jour !";
} else {
  $erreur = "Tous les champs doivent être complétés !";
}

if(isset($erreur)) {
  echo '<font color="red">'.$erreur."</font>";
}
?>
