<?php
require '../db/session.php';
require('../db/header.php');

$id= $_GET['id'];

$sql="SELECT * FROM incident, bien,prestataire WHERE incident.id_bien = bien.id AND incident.id_prestataire = prestataire.id AND id_bien = '$id'";
$req = $db->prepare($sql);
$req->execute();
$res = $req->fetch(PDO::FETCH_ASSOC);
$Intitule_bien =$res["intitule"];
$description =$res["description"];
$acte_prestation=$res["acte_de_prestation"];
$nom_prestataires=$res["nom"];

$sql="INSERT INTO `blockchain`( `Intitule_bien`, `description`, `acte_prestation`, `nom_prestataires`, `Dates`)VALUES ('$Intitule_bien','$description','$acte_prestation','$nom_prestataires',NOW() )";
$req = $db->prepare($sql);
$req->execute();


?>
