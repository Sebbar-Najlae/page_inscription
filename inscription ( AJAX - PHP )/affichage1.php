<?
 // Traitement

 // Initialisation du session
 session_start();

 require("./participants.php");

$liste_participants = [];
 // Saisie des données
 $participant = new Participants;
 $participant->setNom($_POST["nom"]);
 $participant->setPrenom($_POST["prenom"]);
 $participant->setPrenom($_POST["email"]);
 $participant->setPrenom($_POST["phone"]);
 $participant->setPrenom($_POST["ville"]);


 $liste_participants[] = $participant;

 $oui = json_encode($liste_participants);
// Trouver ou créer le tableau dans Session
if( isset( $_SESSION['oui'] ) ) {
    $oui =  $_SESSION['oui'] ;
 }else {
    $_SESSION['oui'] =  $oui;
 }

 ?>

<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel='stylesheet' type='text/css' href='inscription.css'>
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
</head>
<body>
<fieldset>
<legend ><h2>Liste des participants</h2></legend>
<div >
<table>
<tr class="entete"> 
    <td class="information" ><h3>Nom</h3></td>
    <td ><h3>Prénom</h3></td> 
    <td class="information"><h3>Email</h3></td>
    <td ><h3>Téléphone</h3></td>
    <td class="information"><h3>Ville</h3></td>
 </tr>
<tr>

<?php
  $i=0;
foreach ($liste_participants as $value) {
    if($i==0){
        echo "<tr>"; 
        echo "<td>".($value->getNom())."</td>";
        $i++;
    }elseif($i<=3 ){
        echo "<td>".($value->getPrenom())."</td>";
        $i++;
    }else{
        echo "<td>".($value->getEmail())."</td>";
            echo "</tr>";
            $i=0;
     };
  
}
?> 

 <tr>
 </table>
</div>
</fieldset>
</body>

</html>