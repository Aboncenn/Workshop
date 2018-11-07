<?php
require('../db/header.php');
/*
POUR LIVIO => Ajouter le nom du controller en début de pages

IF CLIENT
Affiche la home des Client


IF Prestataire
Affiche la home des prestataires


IF ASSUREUR
affiche la home des assureurs
*/
$user = $_SESSION['user'];
if($user == "client" ){
}elseif($user == "assureur" ){

}elseif($user == "prestataire"){

?>
<div class="container-fluid">

</div>
<?php
  }else{
    header('Location: localhost:8888/Workshop/vues/index.php');
    exit();
  }
  require('../db/footer.php');
?>
