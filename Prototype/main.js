function Ajouter(){
    var Nom=document.getElementById("firstname").value;
    var Prenom=document.getElementById("lastname").value;
    var Adresse=document.getElementById("adresse").value;
    var Phone=document.getElementById("phone").value;
    var mail=document.getElementById("email").value;

    document.getElementById("p").innerHTML+=
    "<b><font color=SaddleBrown size=5>Nom &emsp;&nbsp:</font></b>&emsp;"+Nom+"<br/>" 
    +"<b><font color=SaddleBrown size=5>Prenom :</font></b>&ensp;&nbsp;"+Prenom+"<br/>" 
    +"<b><font color=SaddleBrown size=5>Adresse :</font></b>&ensp;&nbsp;"+Adresse+"<br/>" 
    +"<b><font color=SaddleBrown size=5>Phone &ensp;&nbsp;:</font></b>&ensp;&nbsp;"+Phone+"<br/>"
    +"<b><font color=SaddleBrown size=5>E-mail &ensp;:</font></b>&emsp;"+mail+"<br/>"+"<br/>"
}