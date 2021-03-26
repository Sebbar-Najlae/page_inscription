<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire d'inscription</h1>
    <form action="affichage.php" target="_blank" method="get" >
        <label for="" >Nom</label>
        <input name="nom" type="text">
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html> -->

<!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" href="inscription.css">

</head>
<body>  

<?php
// define variables and set to empty values
$nomErr = $emailErr = $prenomErr =   "";
$nom = $email   = $prenom = $ville = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nom"])) {
    $nomErr = "ce champ est obligatoire";
  } else {
    $nom = test_input($_POST["nom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nom)) {
      $nomErr = "Seul les lettres et les espaces sont validés";
    }
  }

  if (empty($_POST["prenom"])) {
    $prenomErr = "ce champ est obligatoire";
  } else {
    $prenom = test_input($_POST["prenom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$prenom)) {
      $prenomErr = "Seul les lettres et les espaces sont validés";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "ce champ est obligatoire";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Format invalide";
    }
  }
    
 }


 


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<form action="affichage.php" target="_blank" method="get" >
         <fieldset>
            <legend><h2>Nouvel utilisateur</h2></legend>
            
          
            <div class="label">Nom</div>
            <div class="champ">
               <input type="text" name="nom" value="<?php echo $nom?>" />
               <span class="error">* <?php echo $nomErr;?></span>
            </div>

            <div class="label">Prénom</div>
            <div class="champ">
               <input type="text" name="prenom" value="<?php echo $prenom?>" />
               <span class="error">* <?php echo $prenomErr;?></span>
            </div>
            <div class="label">Email</div>
            <div class="champ">
               <input type="text" name="email" value="<?php echo $email?>" />
               <span class="error">* <?php echo $emailErr;?></span>
            </div>
            <div class="label">Ville</div>
            <div class="champ">
               <select name="ville">
                  <option <?php if($ville=="Tanger") echo "selected";?>>Tanger</option>
                  <option <?php if($ville=="Tetouan") echo "selected";?>>Tetouan</option>
                  <option <?php if($ville=="Laarache") echo "selected";?>>Laarache</option>
               </select>
            </div>
            <div class="champ">
               <input type="submit" name="valider" value="Valider l'inscription" />
            </div>
         </fieldset>
      </form>

      


</body>
</html>