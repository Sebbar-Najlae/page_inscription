<?php 

class utilisateur
{
    private $nom;
    private $prenom;
    private $email;
    private $ville;

    function construct()
    {
        $this->nom = $_POST["nom"] ;
        
    }
}

?>
