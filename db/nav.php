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

}elseif($user == "2" ){// Home assureur
  ?>
  <div class="container-fluid">
    <nav>
      <ul class="nav nav-tabs">
        <li>
          <img class="navbar-brand" src="../img/axa.png" width=32vw href="#" />
        </li>

        <li class="nav-item">
<<<<<<< HEAD
        <a class="nav-link active" href="accident.php">Déclarer un accident</a>
=======
          <a class="nav-link active" href="#">Active</a>
>>>>>>> 3da796e6be9d2e00f17b94077f683dae81594114
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