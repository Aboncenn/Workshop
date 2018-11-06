<form method="post" action="declareIncident.php" entype="multipart/form-data">
  <fieldset>
      <legend>L'incident</legend>
      <p>
        Quels est le bien concernée? :<br />
        <input type="radio" name="bien" value="voiture" id="voiture"/>
        <label for="voiture"> Voiture </label><br/>
        <input type="radio" name="bien" value="moto" id="moto"/>
        <label for="moto"> moto </label><br/>
        <input type="radio" name="bien" value="scooter" id="scooter"/>
        <label for="scooter"> Scooter </label><br/>

      </p>
      <p>
          <label for="description"> Description de l'incident </label><br/>
          <textarea name="description" id ="description" rows="10" cols="50">
          </textarea>
      </p>
    <label for="constat"> Joindre Constat à l'amiable:</label>
    <input type="hidden"
    <input type ="file" name="constat" id="constat"/>
    <br/>
    <input type ="button" value="Demander un constat à l'amiable"/>
    <input type="submit" value ="Envoyer"/>
  </fieldset>
</form>
