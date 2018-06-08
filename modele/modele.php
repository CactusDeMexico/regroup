
	<?php
	class Modele

	{
		private $pdo,$table;
		
			public function __construct($server,$bdd,$user,$mdp)
		{
			
		$this->pdo=null;
			try
			{
				$this->pdo = new PDO("mysql:host=".$server.";dbname=".$bdd,$user,$mdp);
			}
			catch(Exeption $exp)
			{
				echo"Erreur de connexion à la bdd";
			}
			
		}
		public function setTable($uneTable)
		{
			$this->table=$uneTable;
			
		}
		function selectAll()
		{


			if($this->pdo!=null)
			{
				$requete = "select * from  ".$this->table;
				$select = $this->pdo->prepare($requete);
				$select->execute();
				$resultats = $select -> fetchAll();
				return $resultats;
			}
			else 
			{
				return null;
			}
		}

		public function selectChamps($tab)
		{
			$champs=implode(",",$tab);
			
			$requete="select  ".$champs." from  ".$this->table;
				if($this->pdo!=null)
				{
					$select =$this->pdo->prepare($requete);
					$select->execute();
					$resultats=$select->fetchAll();
					return $resultats;
				}
				else
				{
					return null;
				}
		}
		public function insert($tab)
		{

			$donnees=array();
			$parametres=array();
			
			foreach($tab as $cle=>$valeur)
			{
				$parametres[]=":".$cle;
				$donnees[":".$cle] = $valeur;
				
			}
			$chaine=implode(",",$parametres);
			$requete="INSERT INTO  ".$this->table."  VALUES(NULL,".$chaine.");";
			echo $requete ;

					   
					   if($this->pdo!=null)
					   {
						   $insert=$this->pdo->prepare($requete);
						   $insert->execute($donnees);
					   }
		}

        public function insert_2($tab)
        {

            $donnees=array();
            $parametres=array();

            foreach($tab as $cle=>$valeur)
            {
                $parametres[]=":".$cle;
                $donnees[":".$cle] = $valeur;

            }
            $chaine=implode(",",$parametres);
            $requete="INSERT INTO  ".$this->table."  VALUES(".$chaine.");";
            echo $requete ;


            if($this->pdo!=null)
            {
                $insert=$this->pdo->prepare($requete);
                $insert->execute($donnees);
            }
        }

		public function rechercher($tab,$motcle)
		{
			$champs=array();
			foreach($tab as $valeur)
			{
				$champs[]=$valeur." like :motcle";
			}
			$chaine=implode(" or ",$champs);
			$requete = "select * from ".$this->table." where ".$chaine.";";
			$donnees=array(":motcle"=>"%".$motcle."%");
			
			if($this->pdo!=null)
			{
				
				$recherche=$this->pdo->prepare($requete);
				$recherche->execute($donnees);
				$resultats=$recherche->fetchAll();
			return $resultats;
			}
		else{			
			return null;
			}	
		}	
		public function supprimer($nom,$prenom)
		{
			$donnees=array(":nom"=>$nom, ":prenom"=>$prenom);

			$requete="DELETE from ".$this->table. " where nom = :nom and prenom =:prenom ;";
			
			
			if($this->pdo!=null)
			{
				$delete=$this->pdo->prepare($requete);
				$delete->execute($donnees);
				
			}
		}
        public function selectID($nom,$prenom)
        {
            $donnees=array(":nom"=>$nom, ":prenom"=>$prenom);

            $requete="select IdPersonne from ".$this->table. " where nom = :nom and prenom =:prenom ;";


            if($this->pdo!=null)
            {
                $select=$this->pdo->prepare($requete);
                $select->execute($donnees);
                $resultat = $select->fetch();
                return  $resultat['IdPersonne'];

            }
        }
        public function selectIdEntreprise($nom,$adresse)
        {
            $donnees=array(":nom"=>$nom, ":ad"=>$adresse);

            $requete="select IdEntreprise from ".$this->table. " where Nom = :nom and Adresse =:ad ;";


            if($this->pdo!=null)
            {
                $select=$this->pdo->prepare($requete);
                $select->execute($donnees);
                $resultat = $select->fetch();
                return  $resultat['IdEntreprise'];
				var_dump($resultat);
            }
        }

		public function login($Username,$Password)
        {

            $donnees = array(":usr" => $Username, ":psw" => $Password);

            $requete = "SELECT COUNT(*) FROM " . $this->table . " WHERE Username = :usr AND Password =:psw 
            												OR Email=:usr AND Password =:psw ;";
            if ($this->pdo != null)
            {
                $select = $this->pdo->prepare($requete);
                $select->execute($donnees);
                $count = $select->fetch();
                return $count['COUNT(*)'];
            }
        }
        public function loginCom($Username,$Password)
        {

            $donnees = array(":usr" => $Username, ":psw" => $Password);

            $requete = "SELECT COUNT(*) FROM " . $this->table . " WHERE  Email=:usr AND Password =:psw ;";
            if ($this->pdo != null)
            {
                $select = $this->pdo->prepare($requete);
                $select->execute($donnees);
                $count = $select->fetch();
                return $count['COUNT(*)'];
            }
        }
    	function selectUn($Lien)
        {
            if($this->pdo!=null)
            {

                $donnees = array(":ly" => $Lien);

                $requete = "SELECT * FROM  ".$this->table." WHERE IdProduit = :ly ;";

                $select = $this->pdo->prepare($requete);
                $select->execute($donnees);
                $resultats = $select -> fetchAll();

                return $resultats;

            }
            else
            {
                return null;
            }
        }
        function selectAllWhere($Type)
        {
            if($this->pdo!=null)
            {
                $donnees = array(":ty" => $Type);
                $requete = "SELECT * FROM  ".$this->table." WHERE Type = :ty ;";

                $select = $this->pdo->prepare($requete);
                $select->execute($donnees);
                $resultats = $select -> fetchAll();
                return $resultats;
            }
            else
            {
                return null;
            }
        }
        public function loginadmin($Nom,$Password)
        {


            // username and password sent from form


            $donnees = array(":usr" => $Nom, ":psw" => $Password);

            $requete = "SELECT COUNT(*) FROM " . $this->table . " WHERE Nom = :usr AND Password =:psw ;";


            if ($this->pdo != null)
            {
                $select = $this->pdo->prepare($requete);
                $select->execute($donnees);
                $count = $select->fetch();


                return $count['COUNT(*)'];
            }


        }
}
		?>
		