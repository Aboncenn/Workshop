<?php
require('../db/header.php');
session_start ();
if(isset($_POST['go'])){
   $mailconnect = htmlspecialchars($_POST['email']);
   $mdpconnect = sha1($_POST['password']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $db->prepare("SELECT * FROM user WHERE mail = ? AND mot_de_passe = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: profil.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}

?>

<body class="login-body">
    <div class=" login-body">

        <div class="row" id="pwd-container">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <section class="login-form">
                    <form method="post" action="#" role="login">
                        <!-- <h3 class="text-center">AXA Assurance</h3> -->

                        <img src="https://image.flaticon.com/icons/svg/236/236831.svg" width="128vw" class="img-responsive" alt="" />
                        <input type="email" name="email" placeholder="Email" required class="form-control input-lg"/>
                        <input type="password" class="form-control input-lg" id="password" placeholder="Password"
                            required="" />
                        <div class="pwstrength_viewport_progress"></div>
                        <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
                        <div>
                            <a href="#">Create account</a> or <a href="#">reset password</a>
                        </div>

                    </form>


                </section>
            </div>

            <div class="col-md-4"></div>


        </div>
    </div>
<!-- </body>

</html> -->
