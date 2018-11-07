<?php
session_start ();
if(isset($_POST['email'])&& isset($_POST['password'])){
   $mailconnect = isset($_POST['email']);
   $mdpconnect = isset($_POST['password']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $db->prepare("SELECT * FROM user WHERE mail = ? AND mot_de_passe = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['user'] = $userinfo['user'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: home.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}

if(isset($erreur)) {
   echo '<font color="red">'.$erreur."</font>";
}
?>
