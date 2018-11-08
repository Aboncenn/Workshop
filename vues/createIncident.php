<?php
require('../db/header.php');
require('../db/nav.php');
?>
<div class="container">
  <h1 class="card-title text-center">L'incident</h1>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="box">

        <form method="post" action="declareIncident.php" entype="multipart/form-data">
          <fieldset>
            <p>
              <b>Quels est le bien concernée? :</b><br />
              <input type="radio" name="bien" value="voiture" id="voiture" />
              <label for="voiture"> Voiture </label><br />
              <input type="radio" name="bien" value="moto" id="moto" />
              <label for="moto"> moto </label><br />
              <input type="radio" name="bien" value="scooter" id="scooter" />
              <label for="scooter"> Scooter </label><br />

            </p>
            <p>
              <b><label for="description"> Description de l'incident </label></b><br />
              <textarea class="form-control" name="description" id="description" rows="10" cols="50">
              </textarea>
            </p>
            <b><label for="constat"> Joindre Constat à l'amiable:</label></b>
            <input type="hidden" name="MAX_FILE_SIZE" value="2000" />
            <input type="file" name="constat" id="constat" />
            <br /><br />
            <b><label for="titre"> Titre du fichier </label></b><br />
            <input type="text" class="form-control" name="titre" value="Titre du fichier" id="titre">
            <br /><br />
            <input class="btn btn-primary" type="button" value="Demander un constat à l'amiable" />
            <br /><br />
            <input class="btn btn-primary" type="submit" value="Envoyer" />
          </fieldset>
        </form>
      </div>

    </div>
    <div class="col-md-4"></div>
  </div>
</div>
<?php
require('../db/footer.php');