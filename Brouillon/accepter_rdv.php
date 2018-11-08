<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>ge </title>
  </head>
  <body>
    <p> Vous avez rendez-vous le 07/11/2018 </p>
    <form method="POST">
      <input type='submit' value="Accepter Rendez-vous"/>
    </form>
  </body>
  </html>


<?php
  require'includes/connect_db.php';
  $req = $db->prepare("UPDATE rendez_vous SET statut= ? where id= ? ");
  $req->execute(array('accepter',1));
?>
