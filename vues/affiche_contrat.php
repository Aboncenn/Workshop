<?php
require('../db/header.php');
require('../db/db.php')

//Récupération dans la base
$recuperationContrat = $db->query("SELECT name, file_url FROM contrat WHERE 'type'='ContratAmiable'");
while($data = $recuperationContrat->fetch()){
  echo $data['name'].' : '.'<a href="'.$data['file_url'].'"> Télécharger'.$data['name'].'</a><br/>';
}
?>
