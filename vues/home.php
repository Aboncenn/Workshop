<?php
require('../db/header.php');
require('../db/nav.php');
/*
POUR LIVIO => Ajouter le nom du controller en début de pages

IF Prestataire
Affiche la home des prestataires


IF ASSUREUR
affiche la home des assureurs
*/
$user = $_SESSION['user'];
$id = $_SESSION['id'];
if($user == "1" ){ // Home client
  var_dump($_SESSION['id']);
?>
<div class="container-fluid">
  <div class="card-body">
      <h1 class="card-title text-center">Mes Biens</h1>
  </div>
  <div class="row">
    <?php
    $req = $db->prepare("SELECT * FROM contrat WHERE id_users = '$id'");
    $req->execute();
    ?>
      <div class="col-4 bien">
          <div class="card">
              <a href="">
                  <div class="card-body text-center">
                      <h6>Voiture :</h6>
                      <img class="bien-icn" src="../img/car.svg" />
                  </div>
              </a>
          </div>
      </div>
  </div>
</div>
<?php
}elseif($user == "2" ){ // Home assureur
?>
<div class="container-fluid">

</div>
<?php
}elseif($user == "3"){// Home prestataire
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
