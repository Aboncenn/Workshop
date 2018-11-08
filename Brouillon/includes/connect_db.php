<?php
  try{
    $db = new PDO('mysql:host=localhost;dbname=bdd_workshop','root','');
  } catch(PDOException $e){
    die('Erreur'.$e->getMessage());
  }
 ?>
