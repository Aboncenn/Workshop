<?php
  require'includes/connect_db.php';
   $recuperationcontrat= $db->query("require'includes/connect_db.php';");
   while ($data = $recuperationcontrat->fetch()){
     echo $data['id'].' '.$data['id_user'].' '.$data['id_biens']. '</br>';
   }

  ?>
