<?php
  try{
    $db = new PDO('mysql:host=localhost;dbname=workshopi4','root','');
  } catch(PDOException $e){
    die('Erreur'.$e->getMessage());
  }
 ?>
