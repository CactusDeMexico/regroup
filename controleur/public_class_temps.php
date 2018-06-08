<?php
    class Temps
        {
            private $datedebut, $datefin;

            public function __construct()
            {
                $this->datedebut = "";
                $this->datefin = 0;
            }
            
            public function renseigner($tab)
            {
                $this->datedebut = $tab["datedebut"];
                $this->datefin = $tab["datefin"];
            }
            
            public function serialiser()
            {
                $tab = array();
                $tab["datedebut"] = $this->datedebut;
                $tab["datefin"] = $this->datefin;
                return $tab;

            }
            
            public function getDateDebut()
            {
                return $this->datedebut;
            }

            public function setDateDebut($datedebut)
            {
                 $this->datedebut = $datedebut;
            }

            public function getDateFin()
            {
                return $this->datefin;
            }

            public function setDateFin($datefin)
            {
                 $this->datefin = $datefin;
            }
        }

?>