<?php
    class connexion
    {
        private $Username;
        private $Password;

        public function __construct()
        {
            $this->Username="";
            $this->Password="";

        }
        public function renseigner ($tab)
        {
            $this->Username =$tab["Username"];
            $this->Password =$tab["Password"];
        }
        public function serialiser ()
        {
            $tab=array();
            $tab["Username"] = $this->Username;
            $tab["Password"] = $this->Password;
            return $tab;
        }
        public function getUsername()
        {
            return $this->Username;
        }
        public function setUsername($Username)
        {
            $this->Username = $Username;
        }
        public function getPassword()
        {
            return $this->Password;
        }
        public function setPassword($Password)
        {
            $this->Password = $Password;
        }

    }
?>