<?php
 //
 //  Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $liste_participants = [];

 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['liste_participants'] ) ) {
    $liste_participants =  $_SESSION['liste_participants'] ;
 }else {
    $_SESSION['liste_participants'] =  $liste_participants;
 }

 // Ajouter le nom du nom dans le tableau
 $liste_participants[] = $_POST["nom"] ;

 // Enregistrer le tableau dans la session
$_SESSION['liste_participants'] =  $liste_participants;

?>

<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <title>Document</title>
</head>
<body>
<h1>Liste des participants</h1>
<input type="button" id="btn" value="imprimer" onclick="window.print()" >
<ul>
    <?php
        foreach ($liste_participants as $value) { 
        ?>
        <li><?php echo $value ?></li>
        <?php
        }
    ?>  
</ul>
</body>
</html>