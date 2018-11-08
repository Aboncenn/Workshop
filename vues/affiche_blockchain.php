<?php
require('../db/header.php');
require('../db/nav.php');
/*
Affiche la totalité de la blockchain
*/


$user = $_SESSION['user'];
if($user == "1" || $user == "2" ){
  ?>
  <div class="container-fluid">
      <h1 class="text-center">Création de compte</h1>
  <table class="table">
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
