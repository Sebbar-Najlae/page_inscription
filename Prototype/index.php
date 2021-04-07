
<!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" href="inscription.css">

</head>
<body>  

<form action="affichage.php" target="_blank" method="POST" >
         <fieldset>
            <legend><h2>Nouvel utilisateur</h2></legend>
            
          
            <div class="label">Nom</div>
            <div class="champ">
               <input type="text" name="nom" value="" required/>
               <span class="error">* </span>
            </div>
            <div class="champ">
               <input type="submit" name="valider" value="Valider l'inscription" />
            </div>
         </fieldset>
      </form>

      


</body>
</html>