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
          <a class="nav-link active" href="home.php">Mes biens</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="accident.php">Déclarer un accident</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contrats</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">se déconnecter</a>
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
        <a class="nav-link active" href="accident.php">Déclarer un accident</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        
        <li class="nav-item">
          <a class="nav-link" href="#">se déconnecter</a>
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
          <a class="nav-link active" href="accident.php">Déclarer un accident</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">se déconnecter</a>
        </li>
      </ul>
    </nav>
  </div>

  <?php
}
