<?php 

class utilisateur
{
    public $nom;
    public $prenom;
    public $tel;
    public $email;
    public $ville;

    public function getNom()
    {
       return $this->nom ;
    }
    public function getPrenom()
    {
       return $this->prenom ;
    }
    public function getTel()
    {
       return $this->tel ;
    }
    public function getEmail()
    {
       return $this->email ;
    }
    public function getVille()
    {
       return $this->ville;
    }

}

?>
