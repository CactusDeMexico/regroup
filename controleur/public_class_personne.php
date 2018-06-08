<?php
	class Personne
		{
			Private $Nom, $Prenom;
			Private $DateNaissance;
			
			public function __construct()
            {
				$this->Nom = "";
				$this->Prenom = "";
				$this->DateNaissance= 0;
			}
			public function renseigner($tab)
			{
				$this->Nom = $tab["Nom"];
				$this->Prenom = $tab["Prenom"];
				$this->DateNaissance = $tab["DateNaissance"];
			}
			public function serialiser()
			{
				$tab = array();
				$tab["Nom"] = $this->Nom;
				$tab["Prenom"] = $this->Prenom;
				$tab["DateNaissance"] = $this->DateNaissance;
				return $tab;
				
			}
			public function getNom()
			{
				return $this->Nom;
			}

			public function setNom($Nom)
			{
				 $this->Nom = $Nom;
			}
			
			public function getPrenom()
			{
				return $this->Prenom;
			}

			public function setPrenom($Prenom)
			{
				 $this->Prenom = $Prenom;
			}
			public function getDateNaissance()
			{
				return $this->DateNaissance;
			}

			public function setDateNaissance($DateNaissance)
			{
				 $this->DateNaissance = $DateNaissance;
			}
		}

?>