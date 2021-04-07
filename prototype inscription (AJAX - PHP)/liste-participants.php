<?php

require("./participant.php");

$liste_participants = [];


 // Saisie des données
 $participant = new participant;
 $participant->setNom($_GET["Nom"]);
 $participant->setPrenom($_GET["Prenom"]);
 $participant->setEmail($_GET["Email"]);
 $liste_participants[] = $participant ;


 // Traitement
 $liste_participants_json =  json_encode($liste_participants);
 
 // Affichage
 echo $liste_participants_json;
?>