<?php
require('../db/header.php');

$user = $_SESSION['user'];

if($user == "1" ){
  var_dump($_SESSION);
?>

<?php

}

if($user == "2" ){
  var_dump($_SESSION);
?>
<div class="container-fluid">
  <form method="post" action="../controller/create_account_db.php" role="create_account_db">
    <div class="form-group">
      <label for="exampleNom">Nom</label>
      <input type="nom" name="nom" class="form-control" id="exampleNom" aria-describedby="nom" placeholder="Saisir le nom">
    </div>
    <div class="form-group">
      <label for="exampleInputPrenom">Prénom</label>
      <input type="prenom" name="prenom" class="form-control" id="exampleInputPrenom" aria-describedby="prenom" placeholder="Saisir le prénom">
    </div>
    <div class="form-group">
      <label for="exampleInputTelephone">Téléphone</label>
      <input type="telephone" name="telephone" class="form-control" id="exampleInputTelephone" aria-describedby="prenom" placeholder="Saisir le téléphone">
    </div>
    <div class="form-group">
      <label for="name">Fonction</label><br>
      <select class="js-example-basic-single" name="fonction" id="valeurFonction">
        <option value="1">Client</option>
        <option value="2">Assureur</option>
        <option value="3">Prestataire</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Adresse mail</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Saisir l'adresse mail">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Mot de passe</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Saisir le mot de passe">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
</div>
<?php
}

if($user == "3" ){
  var_dump($_SESSION);
?>

<?php
}
?>
