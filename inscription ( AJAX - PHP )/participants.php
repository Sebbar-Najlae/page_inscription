<?php
class Participants {
    public $Nom;
    public $Prenom;
    public $Email;
    public $Phone;
    public $Ville;
      
    
    //  function __construct($Nom,$Prenom,$Email,$Phone,$Ville) {
    //     $this->Nom = $Nom;
    //     $this->Prenom = $Prenom;
    //     $this->Email = $Email;
    //     $this->Phone = $Phone;
    //     $this->Ville = $Ville;
    // }
 
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

    public function setEmail($Email){
        $this->Email = $Email;
    }
    public function getEmail(){
        return $this->Email;}

    public function setPhone($Phone){
            $this->Prenom = $Prenom;
        }
    public function getPhone(){
            return $this->Phone;
    }
    public function setVille($Ville){
                $this->Ville = $Prenom;
            }
    public function getVille(){
                return $this->Ville;

    }
}
?>