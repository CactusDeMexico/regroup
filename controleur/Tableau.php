<?php
		include("modele/modele.php");
	class Tableau
		{
			private $unModele;
			public function __construct ($serveur,$bdd,$user,$mdp,$table)
			{
				$this->unModele =new Modele($serveur,$bdd,$user,$mdp);
				$this->unModele->setTable($table);
			}
			public function selectAll()
			{
				return $this->unModele->selectAll();
			}
			public function setTable($uneTable)
			{
				$this->unModele->setTable($uneTable);
			}
            public function insert($unePersonne)
            {

                $this->unModele->insert($unePersonne);
            }
        public function insert_2($unUser)
        {

            $this->unModele->insert_2($unUser);
        }

        public function selectID($nom, $prenom)
        {
            return $this->unModele->selectID($nom, $prenom);
        }
        public function selectIdEntreprise($nom, $adresse)
        {
            return $this->unModele->selectIdEntreprise($nom, $adresse);
        }
        public function login($Username, $Password)
        {
            return $this->unModele->login($Username, $Password);
        }

        public function SelectAllWhere($Type)
        {
            return $this->unModele->SelectAllWhere($Type);
        }
        public function SelectUn($Lien)
        {
            return $this->unModele->SelectUn($Lien);
        }
        public function loginadmin($Nom, $Password)
        {
            return $this->unModele->login($Nom, $Password);
        }
    }
	
?>