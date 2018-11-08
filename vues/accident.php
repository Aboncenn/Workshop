<?php
require('../db/header.php');
require('../db/nav.php');
/*
FORM déclaration accident
*/

$user = $_GET['id'];
$sql="SELECT * FROM contrat WHERE id_biens ='$user'";
$req = $db->prepare($sql);
$req->execute();
$contrat = $req->fetchAll(PDO::FETCH_ASSOC);
if($user == "1" ){ // Home client

$id_user = $contrat[0]['id_user'];
$id_assureur = $contrat[0]['id_assureur'];
$id_bien = $contrat[0]['id_biens'];
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
}elseif($user == "assureur" ){

  /*
  IF ASSUREUR

  Validation assureurs OU Validation d'indemnisation client
  + demande devis à prestataire
  OU
  Validation de la cloture de l'accident
  */

  ?>
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<?php

}else{
  header('Location: localhost:8888/Workshop/vues/index.php');
  exit();
}
require('../db/footer.php');
?>
