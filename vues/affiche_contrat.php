<?php
require('../db/header.php');
require('../db/db.php');

//Récupération dans la base
$recuperationContrat = $db->query("SELECT name, file_url FROM contrat WHERE 'type'='ContratAmiable'");
while($data = $recuperationContrat->fetch()){
  echo $data['name'].' : '.'<a href="'.$data['file_url'].'"> Télécharger'.$data['name'].'</a><br/>';
}
?>
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
  header('Location: localhost:8888/Workshop/vues/');
  exit();
}
require('../db/footer.php');
?>
