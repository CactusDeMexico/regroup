<?php
    class Tranche
        {
            private $palier;

            public function __construct()
            {
                $this->palier = 0;
            }
            
            public function renseigner($tab)
            {
                $this->palier = $tab["palier"];
            }
            
            public function serialiser()
            {
                $tab = array();
                $tab["palier"] = $this->palier;
                return $tab;

            }
            
            public function getPalier()
            {
                return $this->palier;
            }

            public function setPalier($palier)
            {
                 $this->palier = $palier;
            }
        }

?>