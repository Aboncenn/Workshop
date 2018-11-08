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
<div class="container-fluid">
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
              <a href="accident.php?id=<?php echo $id_car; ?>">
                  <div class="card-body text-center">
                      <h6>Voiture :</h6>
                      <img class="bien-icn" src="../img/car.svg" />
                      <span> Déclarer un incident</span>
                  </div>
              </a>
          </div>
      </div>
    <?php }

}elseif($user == "2" ){ // Home assureur
?>
<div class="container-fluid">
  <div class="card-body">
      <h1 class="card-title text-center">Element</h1>
  </div>
  <div class="row">
    <?php
    $sql="SELECT * FROM incident WHERE id_assureur ='$id'";
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
