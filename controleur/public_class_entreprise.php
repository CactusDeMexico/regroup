<?php
    class Entreprise
        {
            private $Nom, $Type, $Adresse;
            
            public function __construct()
            {
                $this->Nom = "";
                $this->Type = "";
                $this->Adresse = "";
            }
            public function renseigner($tab)
            {
                $this->Nom = $tab["Nom"];
                $this->Type = $tab["Type"];
                $this->Adresse = $tab["Adresse"];
            }
            public function serialiser()
            {
                $tab=array();
                $tab["Nom"] = $this->Nom;
                $tab["Type"] = $this->Type;
                $tab["Adresse"] = $this->Adresse;
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

            public function getType()
            {
                return $this->Type;
            }

            public function setType($Type)
            {
                 $this->Type = $Type;
            }
            public function getAdresse()
            {
                return $this->Adresse;
            }

            public function setAdresse($Adresse)
            {
                 $this->Adresse = $Adresse;
            }
        }

?>