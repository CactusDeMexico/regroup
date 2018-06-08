<?php
    class Media
        {
            private $url, $type;

            public function __construct()
            {
                $this->url = "";
                $this->type = "";
            }
            
            public function renseigner($tab)
            {
                $this->url = $tab["url"];
                $this->type = $tab["type"];
            }
            
            public function serialiser()
            {
                $tab = array();
                $tab["url"] = $this->url;
                $tab["type"] = $this->type;
                return $tab;

            }
            
            public function getUrl()
            {
                return $this->url;
            }

            public function setUrl($url)
            {
                 $this->url = $url;
            }

            public function getType()
            {
                return $this->type;
            }

            public function setType($type)
            {
                 $this->type = $type;
            }
        }

?>