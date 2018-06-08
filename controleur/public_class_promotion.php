<?php
    class Promotion
        {
            private $reduction;

            public function __construct()
            {
                $this->reduction = 0;
            }
            
            public function renseigner($tab)
            {
                $this->reduction = $tab["reduction"];
            }
            
            public function serialiser()
            {
                $tab = array();
                $tab["reduction"] = $this->reduction;
                return $tab;

            }
            
            public function getReduction()
            {
                return $this->reduction;
            }

            public function setReduction($reduction)
            {
                 $this->reduction = $reduction;
            }
        }

?>