<?
 // Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $nom = [];
 $prenom = [];
 $email=[];
 $phone=[];

 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['nom'] ) ) {
    $nom =  $_SESSION['nom'] ;
 }else {
    $_SESSION['nom'] =  $nom;
 }

 // Ajouter le nom du nom dans le tableau
 $nom[] = @$_POST["nom"] ;

 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $nom;


 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['nom'] ) ) {
    $prenom =  $_SESSION['nom'] ;
 }else {
    $_SESSION['nom'] =  $prenom;
 }

 // Ajouter le nom du nom dans le tableau
 $prenom[] = @$_POST["prenom"] ;

 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $prenom;


// Trouver ou créer le tableau dans Session
if( isset( $_SESSION['nom'] ) ) {
    $email =  $_SESSION['nom'] ;
 }else {
    $_SESSION['nom'] =  $email;
 }

 // Ajouter le nom du nom dans le tableau
 $email[] = @$_POST["email"] ;

 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $email;

// Trouver ou créer le tableau dans Session
if( isset( $_SESSION['nom'] ) ) {
    $phone =  $_SESSION['nom'] ;
 }else {
    $_SESSION['nom'] =  $phone;
 }

 // Ajouter le nom du nom dans le tableau
 $phone[] = @$_POST["phone"] ;

 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $phone;


// Trouver ou créer le tableau dans Session
if( isset( $_SESSION['nom'] ) ) {
    $ville =  $_SESSION['nom'] ;
 }else {
    $_SESSION['nom'] =  $ville;
 }

 // Ajouter le nom du nom dans le tableau
 $ville[] = @$_POST["ville"] ;

 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $ville;

session_destroy();
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
</head>
<body>
<fieldset>
<div class="btn"><input type="button" id="btn" value="imprimer" onclick="window.print()" ></div>
<br>
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
 
  <?php
  $i=0;
foreach ($_SESSION["nom"] as $value) {
    if($i==0){
        echo "<tr>"; 
        echo "<td>".$value."</td>";
        $i++;
    }elseif($i<=3 ){
        echo "<td>".$value."</td>";
        $i++;
    }else{
        echo "<td>".$value."</td>";
            echo "</tr>";
            $i=0;
     };
  
}
?>

</table>
</div>

</fieldset>
</body>

</html>