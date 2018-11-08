<?php

require'includes/connect_db.php';
$rdv = $_POST['date_rdv'];

$req = $db->prepare("INSERT INTO rendez_vous(date_rdv,statut) VALUES(?,?) ");
$req->execute(array($rdv,'demander'));
var_dump($rdv);

echo 'Votre demande à été envoyé';

 ?>
