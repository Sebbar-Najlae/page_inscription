<?php

require("./participant.php");
 //
 //  Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $liste_participants = [];

 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['liste_participants_objects'] ) ) {
    $liste_participants =  $_SESSION['liste_participants_objects'] ;
 }else {
    $_SESSION['liste_participants_objects'] =  $liste_participants;
 }

 // Création d'un nouveau participant
 $participant = new Participant;
 $participant->setNom($_GET["nom"]);
 $participant->setPrenom($_GET["prenom"]);
 $liste_participants[] = $participant ;

 // Enregistrer le tableau dans la session
$_SESSION['liste_participants_objects'] =  $liste_participants;

?>

<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Liste des participants</h1>
<ul>
    <?php
        foreach ($liste_participants as $value) { 
        ?>
        <li>
            <?php echo ($value->getNom()) ?> , 
            <?php echo ($value->getPrenom()) ?> 
        </li>
        <?php } ?>  
</ul>
</body>
</html>