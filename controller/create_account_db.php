<?php
require '../db/session.php';
require('../db/header.php');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$fonct = $_POST['fonction'];
$email = $_POST['email'];
$mdp = $_POST['password'];

if(!empty($nom) AND !empty($prenom) AND !empty($telephone) AND !empty($fonct) AND !empty($email) AND !empty($mdp)) {

  $reqmail = $db->prepare("SELECT * FROM user WHERE mail = ?");
  $reqmail->execute(array($email));
  $mailexist = $reqmail->rowCount();
  if($mailexist == 0) {
    $insertmbr = $db->prepare("INSERT INTO user(nom, prenom, mail, mot_de_passe, telephone, id_fonction) VALUES(?, ?, ?, ?, ?, ?)");
    $insertmbr->execute(array($nom, $prenom, $email, $mdp, $telephone, $fonct));
    $erreur = "Votre compte a bien été créé !";
    ?>
    <p>Votre compte a bien été créé ! <a href="../vues/home.php">Retourner à l'accueil </a> </p>
    <?php
  } else {
    ?>
    <p>Adresse mail déjà utilisée ! <a href="../vues/create_compte.php">Retourner à la page de création de compte</a> </p>
    <?php
  }
} else {
  ?>
  <p>Tous les champs doivent être complétés ! <a href="../vues/create_compte.php">Retourner à la page de création de compte</a> </p>
  <?php
}
?>
