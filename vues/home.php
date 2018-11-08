<?php
require('../db/header.php');
require('../db/nav.php');
/*
POUR LIVIO => Ajouter le nom du controller en début de pages
*/
$user = $_SESSION['user'];
$id = $_SESSION['id'];
if($user == "1" ){ // Home client
?>
<div class="container">
    <div class="card-body">
        <h1 class="card-title text-center">Mes Biens</h1>
    </div>
    <div class="row">
        <?php
          $sql="SELECT * FROM contrat WHERE id_user ='$id'";
          $req = $db->prepare($sql);
          $req->execute();
          $car = $req->fetchAll(PDO::FETCH_ASSOC);
          foreach ($car as $key => $value) {
            $id_car = $value['id_biens'];
        ?>
        <div class="col-4 bien">
            <div class="card">
                <div class="card-body text-center">
                    <h6>Voiture :</h6>
                    <img class="bien-icn" src="../img/car.svg" />
                    <a href="accident.php?id=<?php echo $id_car; ?>">
                        <span> Déclarer un incident</span>
                    </a>
                </div>
            </div>
        </div>
        <?php }
}else if($user == "2" ){ // Home assureur
    var_dump($_SESSION);
?>
<div class="container-fluid">
  <div class="card-body">
      <h1 class="card-title text-center">Liste des accidents en cours</h1>
  </div>
  <div class="row">
    <?php

    $sql="SELECT * FROM user,incident, bien,contrat WHERE user.id = incident.id_user AND contrat.id_assureur =2 AND bien.id = contrat.id_biens AND incident.id_user = contrat.id_user GROUP BY contrat.id_biens ";
        $req = $db->prepare($sql);
        $req->execute();
        $res = $req->fetchAll(PDO::FETCH_ASSOC);
    foreach ($res as $key => $value) {
        var_dump($value);

      $id = $value['id'];
      $nom = $value['nom'];
      $data = $value['date'];
      $intitule = $value['intitule'];
      ?>
      <div class="col-4 bien">
          <div class="card">

                <!-- <div class="row"> -->
                    <p> <?php echo $nom; ?> <?php echo $data; ?> <?php echo $intitule; ?><a href="accident.php?id=<?php echo $id; ?>"> <button> répondre </button></a> </p>
                <!-- </div> -->
          </div>
      </div>
      <?php
    } ?>
</div>
</div>
<?php
}elseif($user == "3"){ // Home prestataire
?>
  <div class="container-fluid">
    <div class="card-body">
        <h1 class="card-title text-center">Ma liste de prestations à faire</h1>
    </div>
    <div class="row">
      <?php
      $sql="SELECT * FROM incident WHERE id_prestataire ='$id'";
      $req = $db->prepare($sql);
      $req->execute();
      $car = $req->fetchAll(PDO::FETCH_ASSOC);
      foreach ($car as $key => $value) {
        $id_car = $value['id_biens'];
        ?>

        <div class="col-4 bien">
            <div class="card">
                <a href="accident.php?id=<?php echo $id_car; ?>">
                    <div class="card-body text-center">
                        <h6>Voiture :</h6>
                        <img class="bien-icn" src="../img/car.svg" />
                        <span> Selectionnez un accident</span>
                    </div>
                </a>
            </div>
        </div>
        <?php
      } ?>
  </div>
</div>
<?php
  }else{
   header('Location: localhost:8888/Workshop/vues/index.php');
    exit();
  }
  require('../db/footer.php');
?>
