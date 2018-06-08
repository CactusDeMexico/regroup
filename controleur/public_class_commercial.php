<?php
    class Commercial
        {
            private $DateInscription;
            private $Specialite;
            private $Telephone;
            private $Email;
            private $Password;
            private $IdPerssone;
            private $IdEntreprise;

            public function __construct()
            {
                $this->DateInscription = 0;
                $this->Specialite = "";
                $this->Telephone = 0;
                $this->Email = "";
                $this->Password = "";
                $this->IdPerssone = 0;
                $this->IdEntreprise = 0;
            }
            
            public function renseigner($tab)
            {
                $this->DateInscription = $tab["DateInscription"];
                $this->Specialite = $tab["Specialite"];
                $this->Telephone = $tab["Telephone"];
                $this->Email = $tab["Email"];
                $this->Password =$tab["Password"];
                $this->IdPerssone =$tab["IdPerssone"];
                $this->IdEntreprise =$tab["IdEntreprise"];

            }
            
            public function serialiser()
            {
                $tab = array();

                $tab["DateInscription"] = $this->DateInscription;
                $tab["Specialite"] = $this->Specialite;
                $tab["Telephone"] = $this->Telephone;
                $tab["Email"]=$this->Email;
                $tab["Password"]=$this->Password;
                $tab["IdPerssone"]=$this->IdPerssone;
                $tab["IdEntreprise"]=$this->IdEntreprise;

                return $tab;

            }
            
            public function getSpecialite()
            {
                return $this->Specialite;
            }

            public function setSpecialite($Specialite)
            {
                 $this->Specialite = $Specialite;
            }
            public function getTelephone()
            {
                return $this->Telephone;
            }
            public function setTelephone($Telephone)
            {
                 $this->Telephone = $Telephone;
            }

            public function getDateInscription()
            {
                return $this->DateInscription;
            }

            public function setDateInscription($DateInscription)
            {
                 $this->DateInscription = $DateInscription;
            }
            public function getEmail()
            {
                return $this->Email;
            }

            public function setEmail($Email)
            {
                $this->Email = $Email;
            }
            public function getPassword()
            {
                return $this->Password;
            }
            public function SetPassword($Password)
            {
                $this-> Password=$Password;
            }


            public function getIdPerssone()
            {
                return $this->IdPerssone;
            }
            public function SetIdPerssone($IdPerssone)
            {
                $this-> IdPerssone=$IdPerssone;
            }

            public function getIdEntreprise()
            {
                return $this->IdEntreprise;
            }
            public function SetIdEntreprise($IdEntreprise)
            {
                $this-> IdEntreprise=$IdEntreprise;
            }
        }

?>