<?php
require('../db/header.php');
/*
AFFICHE LE FORM DE CONNEXION

*/
?>
<div class="wrapper">
  <div class="login is-active">
    <div class="profile"><i class="fa fa-camera fa-2x"></i></div>
    <div class="form-element">
      <span><i class="fa fa-envelope"></i></span><input type="email" placeholder="Your Email Address"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-lock"></i></span><input type="password" placeholder=" Password"/>
    </div>
    <button class="btn-login">login</button>
  </div>
  
  <div class="register down">
    <div class="form-element">
      <span><i class="fa fa-user"></i></span><input type="text" placeholder="Full Name"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-envelope"></i></span><input type="email" placeholder="Your Email Address"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-lock"></i></span><input type="password" placeholder="Password"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-lock"></i></span><input type="password" placeholder="Re-Enter Password"/>
    </div>
    <button class="btn-register">register</button>
  </div>

  <div class="login-view-toggle">
    <div class="sign-up-toggle is-active">Don't have an account? <a href="#">Sign Up</a></div>
    <div class="login-toggle">Already have an account? <a href="#">Login</a></div>
  </div>
</div>

?>
<?php
