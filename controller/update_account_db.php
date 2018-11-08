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

  $reqmail = $db->prepare("SELECT * FROM user WHERE mail = ?");
  $reqmail->execute(array($email));
  $mailexist = $reqmail->rowCount();
  if($mailexist == 0) {
    $insertmbr = $db->prepare("UPDATE user SET nom = $nom WHERE id = $id");
    $insertmbr->execute( );
    $insertmbr = $db->prepare("UPDATE user SET prenom = $prenom WHERE id = $id");
    $insertmbr->execute( );
    $insertmbr = $db->prepare("UPDATE user SET telephone = $telephone WHERE id = $id");
    $insertmbr->execute( );
    $insertmbr = $db->prepare("UPDATE user SET email = $email WHERE id = $id");
    $insertmbr->execute( );
    $insertmbr = $db->prepare("UPDATE user SET mdp = $mdp WHERE id = $id");
    $insertmbr->execute( );
  } else {
    $erreur = "Adresse mail déjà utilisée !";
  }
} else {
  $erreur = "Tous les champs doivent être complétés !";
}

if(isset($erreur)) {
  echo '<font color="red">'.$erreur."</font>";
}
?>
