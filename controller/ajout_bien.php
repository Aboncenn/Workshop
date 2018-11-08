<?php
  require'includes/connect_db.php';
//  var_dump($_POST);
  $typeBien = $_POST['bien'];
  $plaqueImmatriculation = $_POST['plaque_Immatriculation'];
  $dateAchat = $_POST['date_achat'];

  $req = $db->prepare('INSERT INTO bien(id,intitule,date_achat) VALUES(?,?,?) ');
  $req ->execute(array($plaqueImmatriculation,$typeBien,$dateAchat));

  echo 'Votre bien a bien été enregistré'
 ?>
