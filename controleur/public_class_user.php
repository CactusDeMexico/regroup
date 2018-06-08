<?php
    class User
        {
            privaTe $Adresse, $Email, $Telephone,$Username,$Password,$IdPersonne;

            public function __construct()
            {
                $this->Adresse = "";
                $this->Email = "";
                $this->Telephone = "";
                $this->Username = "";
                $this->Password = "";
                $this->IdPersonne ="";
            }
            
            public function renseigner($tab)
            {
                $this->Adresse = $tab["Adresse"];
                $this->Email = $tab["Email"];
                $this->Telephone = $tab["Telephone"];
                $this->Username= $tab["Username"];
                $this->Password =$tab["Password"];
                $this->IdPersonne=$tab["IdPerssone"];
            }
            
            public function serialiser()
            {
                $tab = array();
                $tab["Adresse"] = $this->Adresse;
                $tab["Email"] = $this->Email;
                $tab["Telephone"] = $this->Telephone;
                $tab["Username"]= $this->Username;
                $tab["Password"]=$this->Password;
                $tab["IdPerssone"]=$this->IdPersonne;

                return $tab;

            }
            
            public function getAdresse()
            {
                return $this->Adresse;
            }

            public function setAdresse($Adresse)
            {
                 $this->Adresse = $Adresse;
            }

            public function getEmail()
            {
                return $this->Email;
            }

            public function setEmail($Email)
            {
                 $this->Email = $Email;
            }

            public function getTelephone()
            {
                return $this->Telephone;
            }

            public function setTelephone($Telephone)
            {
                 $this->Telephone = $Telephone;
            }

            public function getUsername()
            {
                return $this->Username;
            }
            public function SetUsername($Username)
            {
                $this-> Username=$Username;
            }
            public function getPassword()
            {
                return $this->Password;
            }
            public function SetPassword($Password)
            {
               $this-> Password=$Password;
            }

            public function getIdPersonne()
            {
                return $this->IdPersonne;
            }
            public function setIdPersonne($IdPersonne)
            {
                $this->IdPersonne=$IdPersonne;
            }

        }

?>