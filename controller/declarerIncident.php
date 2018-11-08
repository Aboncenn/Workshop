<?php
require '../db/session.php';
require('../db/header.php');
var_dump($_POST);
if (!empty($_POST)){
  $user = $_POST['user'];
  $bien = $_POST['bien'];
  $assureur = $_POST['assureur'];
  $description = $_POST['description'];
  $constat = $_POST['constat'];
  if(!empty($description)){
    $req = $db->prepare("INSERT INTO incident(id_bien, id_user,)
      VALUES (:id_risque_direction,:pilote)");
         $req->execute(
           array(
               'id_risque_direction' => $id_risque_direction,
               'pilote' => $pilote,
           )
         );
  }

if (!empty($constat)){
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
