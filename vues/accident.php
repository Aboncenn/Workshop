<?php

require('../db/header.php');
require('../db/nav.php');
$user = $_GET['id'];

if($user == "1" ){ // Home client
  $sql="SELECT * FROM contrat WHERE id_biens ='$user'";
  $req = $db->prepare($sql);
  $req->execute();
  $contrat = $req->fetchAll(PDO::FETCH_ASSOC);
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
}elseif($user == "2" ){ // Assureur

  $sql="SELECT * FROM user, bien,incident WHERE incident.id ='$user' AND incident.id_bien = bien.id";
  $req = $db->prepare($sql);
  $req->execute();
  $contrat = $req->fetchAll(PDO::FETCH_ASSOC);
$id = $contrat[0]["id"];
$status = $contrat[0]["id_status"];
$id_user = $contrat[0]['id_user'];
$id_bien = $contrat[0]['id_bien'];
$id_assureur=$contrat[0]['id_bien'];
$description = $contrat[0]['description'];
$acte_prestation = $contrat[0]['acte_de_prestation'];
?>
<div class="container-fluid">
  <h3> Définir un prestataire pour un accident </h3>
  <form method="post" action="../controller/declarerIncident.php">
    <input name="id" type="hidden" value=<?php echo $id?>>
    <input name="user" type="hidden" value=<?php echo $id_user?>>
    <input name="bien" type="hidden" value=<?php echo $id_bien?>>
    <input name="assureur" type="hidden" value=<?php echo $id_assureur?>>
    <div class="form-group">
      <label for="exampleInputEmail1">Description</label>
      <textarea type="text" class="form-control" name="description" value=<?php echo $description?> placeholder="Description de l'incident" required><?php echo $description?> </textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Actes de prestations</label>
      <textarea type="text" class="form-control" name="prestations_faites" placeholder="Actes de prestations faites par le sous traitant" required><?php echo $acte_prestation?></textarea>
    </div>
    <div class="form-group">
      <?php
      $sql="SELECT * FROM prestataire";
      $req = $db->prepare($sql);
      $req->execute();
      $prestataire = $req->fetchAll(PDO::FETCH_ASSOC);
      ?>
      <label>Prestataire :</label>
             <select name="prestataire" class="form-control" style="width: 100%;"required>
               <option selected value=''>S&#233;l&#233;ctionnez</option>
               <?php
                 foreach($prestataire as $key => $value){
                   echo'<option value="'. $value['id'].'">'; echo $value['nom'];?></option>
                  <?php } ?>
             </select>
    </div>
    <div class="form-group">
      <?php
      $sql="SELECT * FROM status";
      $req = $db->prepare($sql);
      $req->execute();
      $status = $req->fetchAll(PDO::FETCH_ASSOC);
      ?>
      <label>Statut :</label>
             <select name="status" class="form-control" style="width: 100%;"required>
               <option selected value=''>S&#233;l&#233;ctionnez</option>
               <?php
                 foreach($status as $key => $value){
                   echo'<option value="'. $value['id'].'">'; echo $value['intitule_statut'];?></option>
                  <?php } ?>
             </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
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
      <div class="form-group">
        <label for="exampleInputEmail1">Actes de prestations</label>
        <textarea type="text" class="form-control" name="prestations_faites" placeholder="Description de l'incident" required></textarea>
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
