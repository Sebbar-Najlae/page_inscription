<?php
class Participant {
    private $Nom;
    private $Prenom;
    private $Email;
      
    
/*     function __construct($Nom,$Prenom,$Email) {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Email = $Email;
    }
 */
    public function setNom($Nom){
        $this->Nom = $Nom;
    }
    public function getNom(){
        return $this->Nom;
    }

    public function setPrenom($Prenom){
        $this->Prenom = $Prenom;
    }
    public function getPrenom(){
        return $this->Prenom;
    }


}
?>