<?php
require '../db/session.php';
require('../db/header.php');
var_dump($_POST);
if (!empty($_POST)){
  if(isset($_POST['id'])){
    $id= $_POST['id'];
  }else{
  $id= 0;
  }
  $user = $_POST['user'];
  $bien = $_POST['bien'];
  $assureur = $_POST['assureur'];
  $description = $_POST['description'];
  if(isset($_POST['status'])){
    $status= $_POST['status'];
  }else{
  $status= 0;
  }

  if(isset($_POST['prestataire'])){
    $prestations= $_POST['prestataire'];
  }else{
    $prestations = NULL;
  }
  if(isset($_POST['prestations_faites'])){
    $prestations_faites= $_POST['$prestations_faites'];
  }else{
    $prestations_faites = NULL;
  }
  if($status == 0 && $id == 0){
    $req = $db->prepare("INSERT INTO incident(id_bien, id_user,id_prestataire ,description,acte_de_prestation ,id_status)
      VALUES ('$bien','$user',Null,'$description',Null,1)");
    $req->execute();

    ?>
      <p>Vous avez ajouté un accident <a href="../vues/home.php">go to home</a> </p>
    <?php
  }
  if($id <> 0 && $prestations_faites == NULL){
    $req = $db->prepare("UPDATE incident SET `id_prestataire`='$prestations' ,`id_status`='$status'  WHERE id = $id");
    $req->execute();
?>
    <p>Vous avez indiqué un prestaire <a href="../vues/home.php">go to home</a> </p>
<?php
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

          $req = $db->prepare('INSERT INTO files(name,file_url,type) VALUES(?,?,?) ');
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
