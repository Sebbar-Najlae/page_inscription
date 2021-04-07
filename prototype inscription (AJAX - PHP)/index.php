<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="inscription.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
</head>
<body>
    <form action="liste-participants.php" target="_blank" method="get" >

    <fieldset>
            <legend><h2>Nouvel utilisateur</h2></legend>
            
          
            <div class="label">Nom</div>
            <div class="champ">
               <input type="text" name="Nom" value="" required/>
               <span class="error">* </span>
            </div>

            <div class="label">Prénom</div>
            <div class="champ">
               <input type="text" name="Prenom" value="" required/>
               <span class="error">* </span>
            </div>
            <div class="label">Télephone</div>
            <div class="champ">
               <input type="tel" pattern="[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}" name="phone" value="" required/>
               <span class="error">*</span>
            </div>
            <div class="label">Email</div>
            <div class="champ">
               <input type="email" name="Email" value="" required/>
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
    <div id="app"></div>
    <script type="text/javascript" >
alert(data);
        // KeyWord : JSON From the Server
        $.get("liste-participants.php", function( data ){
            var participants = JSON.parse(data);
            participants.forEach(participant => {

                // Création d'un élément html 
                var presentation =  $("<p></p>")
                .text(participant.Nom + "," + participant.Prenom );

                // Insertion de l'élément html dans l'élément div
                $("#app").append(presentation);
            });
        });
    </script>
</body>
</html>