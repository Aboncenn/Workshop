<?php

?>

<body>
  <?php
$user = $_SESSION['user'];
if($user == "1" ){ // Home client
?>

  <div class="container-fluid">
    <nav>
      <ul class="nav nav-tabs">
        <li>
          <img class="navbar-brand" src="../img/axa.png" width=32vw href="#" />
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../vues/update_compte_user.php">Modification de compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../vues/home.php">Mes biens</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contrats</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Se déconnecter</a>
        </li>
      </ul>
    </nav>
  </div>
  <?php

}elseif($user == "2" ){// Home assureur
  ?>
  <div class="container-fluid">
    <nav>
      <ul class="nav nav-tabs">
        <li>
          <img class="navbar-brand" src="../img/axa.png" width=32vw href="#" />
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="../vues/home.php">Liste des accidents</a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="../vues/createIncident.php">Déclarer un incident</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="../vues/create_compte.php">Création de compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../vues/update_compte_user.php">Modification de compte</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Se déconnecter</a>
        </li>
      </ul>
    </nav>
  </div>
  <?php
}elseif($user == "3"){// Home prestataire
?>
  <div class="container-fluid">
    <nav>
      <ul class="nav nav-tabs">
        <li>
          <img class="navbar-brand" src="../img/axa.png" width=32vw href="#" />
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../vues/update_compte_user.php">Modification de compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Se déconnecter</a>
        </li>
      </ul>
    </nav>
  </div>

  <?php
}
