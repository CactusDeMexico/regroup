<?php
    class Groupe
        {
            private $nbParticipant;

            public function __construct()
            {
                $this->nbParticipant = 0;
            }
            
            public function renseigner($tab)
            {
                $this->nbParticipant = $tab["nbParticipant"];
            }
            
            public function serialiser()
            {
                $tab = array();
                $tab["nbParticipant"] = $this->nbParticipant;
                return $tab;

            }
            
            public function getNbParticipant()
            {
                return $this->nbParticipant;
            }

            public function setNbParticipant($nbParticipant)
            {
                 $this->nbParticipant = $nbParticipant;
            }
        }

?>