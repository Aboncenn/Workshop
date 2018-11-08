<?php

require('../db/header.php');
require('../db/nav.php');

$user = $_GET['id'];
$sql="SELECT * FROM contrat WHERE id_biens ='$user'";
$req = $db->prepare($sql);
$req->execute();
$contrat = $req->fetchAll(PDO::FETCH_ASSOC);
$id_user = $contrat[0]['id_user'];
$id_assureur = $contrat[0]['id_assureur'];
$id_bien = $contrat[0]['id_biens'];
if($user == "1" ){ // Home client
  ?>

<div class="container-fluid">
  <h3> Déclarer un accident </h3>
  <form method="post" action="../controller/declarerIncident.php">
    <input name="user" type="hidden" value=<?php echo $id_user?>>
    <input name="bien" type="hidden" value=<?php echo $id_bien?>>
    <input name="assureur" type="hidden" value=<?php echo $id_assureur?>>
    <div class="form-group">
      <label for="exampleInputEmail1">Description</label>
      <textarea type="text" class="form-control" name="description" placeholder="Description de l'incident" required></textarea>
    </div>
    <label for="constat"> Joindre Constat à l'amiable:</label>
    <input type ="file" name="constat" id="constat"/>
    <br/>
    <a href ="constat-amiable-auto.pdf" target="_blank"> Télécharger le constat à l'amiable </a>
    <br/>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <?php
}elseif($user == "2" ){ // Assureur
  ?>
  <div class="container-fluid">
    <h3> Définir un prestataire pour un accident </h3>
    <form method="post" action="../controller/declarerIncident.php">
      <input name="user" type="hidden" value=<?php echo $id_user?>>
      <input name="bien" type="hidden" value=<?php echo $id_bien?>>
      <input name="assureur" type="hidden" value=<?php echo $id_assureur?>>
      <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <textarea type="text" class="form-control" name="description" placeholder="Description de l'incident" required></textarea>
      </div>
      <label for="constat"> Joindre Constat à l'amiable:</label>
      <input type ="file" name="constat" id="constat"/>
      <br/>
      <a href ="constat-amiable-auto.pdf" target="_blank"> Télécharger le constat à l'amiable </a>
      <br/>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <h3> Définir un prestataire pour un accident </h3>

<?php
}elseif($user == "3" ){ // prestataire
  ?>
  <div class="container-fluid">
    <h3> Déclarer un accident </h3>
    <form method="post" action="../controller/declarerIncident.php">
      <input name="user" type="hidden" value=<?php echo $id_user?>>
      <input name="bien" type="hidden" value=<?php echo $id_bien?>>
      <input name="assureur" type="hidden" value=<?php echo $id_assureur?>>
      <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <textarea type="text" class="form-control" name="description" placeholder="Description de l'incident" required></textarea>
      </div>
      <label for="constat"> Joindre Constat à l'amiable:</label>
      <input type ="file" name="constat" id="constat"/>
      <br/>
      <a href ="constat-amiable-auto.pdf" target="_blank"> Télécharger le constat à l'amiable </a>
      <br/>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php } else{

  header('Location: localhost:8888/Workshop/vues/index.php');
  exit();
}
require('../db/footer.php');
?>
