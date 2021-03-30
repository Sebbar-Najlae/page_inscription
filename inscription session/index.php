
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

            <div class="label">Prénom</div>
            <div class="champ">
               <input type="text" name="prenom" value="" required/>
               <span class="error">* </span>
            </div>
            <div class="label">Télephone</div>
            <div class="champ">
               <input type="tel" pattern="[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}" name="phone" value="" required/>
               <span class="error">*</span>
            </div>
            <div class="label">Email</div>
            <div class="champ">
               <input type="email" name="email" value="" required/>
               <span class="error">*</span>
            </div>
            <div class="label">Ville</div>
            <div class="champ">
               <select name="ville">
                  <option>Tanger</option>
                  <option >Tetouan</option>
                  <option >Laarache</option>
               </select>
            </div>
            <div class="champ">
               <input type="submit" name="valider" value="Valider l'inscription" />
            </div>
         </fieldset>
      </form>

      


</body>
</html>