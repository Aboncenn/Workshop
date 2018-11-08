<?php
require '../db/session.php';
require('../db/header.php');
  $email = $_POST['email'];
  $mdp = $_POST['password'];
  $req = $db->prepare('SELECT * FROM user WHERE (mail = :mail)');
  $req->execute();
  $req->setFetchMode(PDO::FETCH_OBJ);
  $donnees = $req->fetch();
  $res = $req->rowCount();
  if(($res) != 0){
    if(($mdp == $donnees->mot_de_passe)){
    $_SESSION["user"] = $donnees->id_fonction;
    $_SESSION["id"] = $donnees->id;
      ?>
      <p>Vous êtes connecté ! <a href="../vues/home.php">go to home</a> </p>
      <?php
    }else{
      ?>
      <p>Mauvais mot de passe, recommencez <a href="../vues/index.php">Rentourner à la connexion </a> </p>
      <?php
    }
  }else{
    ?>
    <p>Ce pseudo n'existe pas <a href="../vues/index.php">Rentourner à la connexion </a> </p>
    <?php
  }
?>
