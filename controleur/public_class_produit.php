<?php
    class Produit
        {
            private $nom, $description;
            private $quantite;
            private $prix;

            public function __construct()
            {
                $this->nom = "";
                $this->description = "";
                $this->quantite = 0;
                $this->prix = 0;
            }
            
            public function renseigner($tab)
            {


                $this->nom = $tab["nom"];
                $this->description = $tab["description"];
                $this->quantite = $tab["quantite"];
                $this->prix = $tab["prix"];
            }
            
            public function serialiser()
            {
                $tab = array();
                $tab["nom"] = $this->nom;
                $tab["description"] = $this->description;
                $tab["quantite"] = $this->quantite;
                $tab["prix"] = $this->prix;
                return $tab;

            }
            
            public function getNom()
            {
                return $this->nom;
            }

            public function setNom($nom)
            {
                 $this->nom = $nom;
            }

            public function getDescription()
            {
                return $this->description;
            }

            public function setDescription($description)
            {
                 $this->description = $description;
            }

            public function getQuantite()
            {
                return $this->quantite;
            }

            public function setQuantite($quantite)
            {
                 $this->quantite = $quantite;
            }

            public function getPrix()
            {
                return $this->prix;
            }

            public function setPrix($prix)
            {
                 $this->prix = $prix;
        }
        }

?>