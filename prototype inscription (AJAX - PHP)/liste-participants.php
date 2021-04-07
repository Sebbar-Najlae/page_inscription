<?php

require("./participant.php");

$liste_participants = [];


 // Saisie des données
 $participant = new participant;
 $participant->setNom($_POST["Nom"]);
 $participant->setPrenom($_POST["Prenom"]);
 $participant->setEmail($_POST["Email"]);
 $liste_participants[] = $participant ;

 // $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

 // Traitement
 $liste_participants_json =  json_encode($liste_participants);
 
 // Affichage
 echo $liste_participants_json;
?>