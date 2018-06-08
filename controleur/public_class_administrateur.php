<?php
class Administrateur
{
    private $Nom;
    private $Password;

    public function __construct()
    {
        $this->Nom="";
        $this->Password="";

    }
    public function renseigner ($tab)
    {
        $this->Nom =$tab["Nom"];
        $this->Password =$tab["Password"];
    }
    public function serialiser ()
    {
        $tab=array();
        $tab["Nom"] = $this->Nom;
        $tab["Password"] = $this->Password;
        return $tab;
    }
    public function getNom()
    {
        return $this->Nom;
    }
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }
    public function getPassword()
    {
        return $this->Password;
    }
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

}
?>