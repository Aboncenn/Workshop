<?php

?>

<body>
  <?php
$user = $_SESSION['user'];
if($user == "1" ){ // Home client
?>

  <!-- <div class="container-fluid"> -->
    <div class="">

      <ul class="nav nav-tabs card-header-tabs">
        <li>
          <img class="navbar-brand" src="../img/axa.png" width=32vw href="#" />
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link 2</a>
        </li>
      </ul>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="#">se déconnecter</a>
        </li>
      </ul>
    </div>
  <!-- </div> -->
  <?php

}elseif($user == "2" ){// Home assureur
  ?>
  <!-- <div class="container-fluid"> -->
    <div class="">

      <ul class="nav nav-tabs">
        <li>
          <img class="navbar-brand" src="../img/axa.png" width=32vw href="#" />
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="#">Mes biens</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contrats</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#">Se déconnecter</a>
          </li>
      </ul>
    </div>
  <!-- </div> -->
  <?php
}elseif($user == "3"){// Home prestataire
?>
  <!-- <div class="container-fluid"> -->
    <div class="card-header">

      <ul class="nav nav-tabs">
        <li>
          <img class="navbar-brand" src="../img/axa.png" width=32vw href="#" />
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link 2</a>
        </li>
      </ul>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="#">se déconnecter</a>
        </li>
      </ul>
    </div>
  <!-- </div> -->
  <?php
}