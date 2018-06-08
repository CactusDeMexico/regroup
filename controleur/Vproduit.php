<?php
class VProduit
{
    private $Nom, $Description, $Type, $URL;
    private $Quantite;
    private $Prix;
    private $DateDebut, $DateFin;

    public function __construct()
    {
        $this->Nom = "";
        $this->Prix = 0;
        $this->Description = "";
        $this->Quantite = 0;
        $this->Type = "";
        $this->DateDebut="";
        $this->DateFin="";
        $this->URL="";
    }

    public function renseigner($tab)
    {


        $this->Nom = $tab["Nom"];
        $this->Description = $tab["Description"];
        $this->Quantite = $tab["Quantite"];
        $this->Prix = $tab["Prix"];
    }

    public function serialiser()
    {
        $tab = array();
        $tab["Nom"] = $this->Nom;
        $tab["Description"] = $this->Description;
        $tab["Quantite"] = $this->Quantite;
        $tab["Prix"] = $this->Prix;
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

    public function getDescription()
    {
        return $this->Description;
    }

    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    public function getQuantite()
    {
        return $this->Quantite;
    }

    public function setQuantite($Quantite)
    {
        $this->Quantite = $Quantite;
    }

    public function getPrix()
    {
        return $this->Prix;
    }

    public function setPrix($Prix)
    {
        $this->Prix = $Prix;
    }
}

?>