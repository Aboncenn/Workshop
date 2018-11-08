<?php
  require'includes/connect_db.php';

  //Récupération dans la base
  $recuperationContrat = $db->query("SELECT name, file_url FROM files WHERE 'type'='ContratAmiable'");
  while($data = $recuperationContrat->fetch()){
    echo $data['name'].' : '.'<a href="'.$data['file_url'].'"> Télécharger'.$data['name'].'</a><br/>';
  }
 ?>
