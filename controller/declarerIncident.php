<?php
require '../db/session.php';
require('../db/header.php');
var_dump($_POST);

if (!empty($_POST)){
$



if (!empty($_FILES)){
    $file_name = $_FILES['constat']['name'];
    $file_extension = strtolower(strrchr($file_name,"."));
    $file_tmp_name= $_FILES['constat']['tmp_name'];
    $file_dest = 'ConstatClient/'.$file_name;

    $extensions_autorisees = array('.pdf','.jpeg','.jpg');

    if(in_array($file_extension, $extensions_autorisees))
    {
      if(move_uploaded_file($file_tmp_name,$file_dest))
      {

          $req = $db->prepare('INSERT INTO files(name,file_url,type) VALUES(?,?) ');
          $req->execute(array($file_name,$file_dest,'ContratAmiable'));

        echo 'Le fichier a bien été envoyés';
      } else {
        echo " Une erreur est survenue lors de l'envoie du fichier";
      }

    } else {
      echo 'Seuls les fichiers PDF et JPEG sont autorisées';
    }

  }
}







 ?>
