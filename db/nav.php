<?php

?>
<body>
<?php
$user = $_SESSION['user'];
if($user == "client" ){
?>

<div class="card text-center">
  <div class="card-header">

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
  </div>
</div>
<?php

}elseif($user == "assureur" ){
  ?>
  <div class="card text-center">
    <div class="card-header">

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
    </div>
  </div>
<?php
}elseif($user == "prestataire"){
?>
<div class="card text-center">
  <div class="card-header">

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
  </div>
</div>
<?php
}
