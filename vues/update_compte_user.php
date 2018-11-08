<?php
require('../db/header.php');
require('../db/nav.php');


$user = $_SESSION['user'];
$id = $_SESSION['id'];

// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = $db->query("SELECT * FROM user WHERE id = $id");
while ($donnees = $req->fetch())
{
  $nom = $donnees['nom'];
  $prenom = $donnees['prenom'];
  $mail = $donnees['mail'];
  $mdp = $donnees['mot_de_passe'];
  $tel = $donnees['telephone'];
}
?>
<h1 class="text-center">Modification de compte</h1>
<div class="container-fluid">
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
      <form method="post" action="../controller/update_account_db.php" role="create_account_db">
        <div class="form-group">
          <label for="exampleNom">Nom</label>
          <input type="nom" name="nom" class="form-control" id="exampleNom" aria-describedby="nom" placeholder="Saisir le nom"
            value="<?php echo $nom?>">
        </div>
        <div class="form-group">
          <label for="exampleInputPrenom">Prénom</label>
          <input type="prenom" name="prenom" class="form-control" id="exampleInputPrenom" aria-describedby="prenom"
            placeholder="Saisir le prénom" value="<?php echo $prenom?>">
        </div>
        <div class="form-group">
          <label for="exampleInputTelephone">Téléphone</label>
          <input type="telephone" name="telephone" class="form-control" id="exampleInputTelephone" aria-describedby="prenom"
            placeholder="Saisir le téléphone" value="<?php echo $tel?>">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Adresse mail</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Saisir l'adresse mail" value="<?php echo $mail?>">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Saisir le mot de passe"
            value="<?php echo $mdp?>">
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
      </form>
    </div>
    <div class="col-4"></div>
  </div>
</div>