
<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['age'] = $_POST['age'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
Formulaire html
</title>
</head>
<body>
<form action="inscription.php" method="POST">
Votre nom :<input type="text" name="nom">
Votre âge :<input type="text" name="age">
<p>
<input type=submit value="Envoyer">
</form>
<?php

$nom=$_SESSION['nom'];
$age=$_SESSION['age'];

$tabs = array($nom,$age);
foreach ($tabs as $tab) {
    echo " $tab \n" ;
}
?>
</body>
</html>