<?php
require('../db/header.php');
<<<<<<< HEAD
require('../db/db.php');
=======
require('../db/db.php')
>>>>>>> 559e129e0e2355911ec9b33a1e29743c4c511411

//Récupération dans la base
$recuperationContrat = $db->query("SELECT name, file_url FROM contrat WHERE 'type'='ContratAmiable'");
while($data = $recuperationContrat->fetch()){
  echo $data['name'].' : '.'<a href="'.$data['file_url'].'"> Télécharger'.$data['name'].'</a><br/>';
}
?>
<<<<<<< HEAD
=======

>>>>>>> 559e129e0e2355911ec9b33a1e29743c4c511411
/*
Affiche la totalité de la blockchain
*/

$user = $_SESSION['user'];
if($user == "1" || $user == "2"){
?>
<div class="container-fluid">
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<?php
}else{
<<<<<<< HEAD
  header('Location: localhost:8888/Workshop/vues/');
=======
  header('Location: ../vues/index.php');
>>>>>>> 559e129e0e2355911ec9b33a1e29743c4c511411
  exit();
}
require('../db/footer.php');
?>
