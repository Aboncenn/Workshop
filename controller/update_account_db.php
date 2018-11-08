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
  ?>
  <p>Votre compte a bien été mis à jour ! <a href="../vues/home.php">Retourner à l'accueil </a> </p>
  <?php
} else {
  ?>
  <p>Tous les champs doivent être complétés ! <a href="../vues/update_compte_user.php">Retourner à la page de mise à jour du compte </a> </p>
  <?php
}
?>
