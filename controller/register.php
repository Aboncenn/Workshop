<?php
require '../db/session.php';
require('../db/header.php');
  $email = $_POST['email'];
  $mdp = $_POST['password'];
  $sql="SELECT * FROM user WHERE mail ='$email'";
  $req = $db->prepare($sql);
  $req->execute();
  $donnees = $req->fetchAll();
  $res = $req->rowCount();
  if(($res) != 0){
    if(($mdp == $donnees[0]['mot_de_passe'])){
    $_SESSION["user"] = $donnees[0]['id_fonction'];
    $_SESSION["id"] = $donnees[0]['id'];
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
