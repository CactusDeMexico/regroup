<?php
/**
 * Created by PhpStorm.
 * User: toshiba
 * Date: 14/06/2018
 * Time: 15:56
 */

class AchatsEff
{
    private $nom, $prix;
    private $quantite;
    private $IdProduit;
    private $IdUser;

    public function __construct()
    {
        $this->nom = "";
        $this->prix = 0;
        $this->quantite = 0;
        $this->IdProduit= 0;
        $this->IdUser = 0;




    }

    public function renseigner($tab)
    {
        $this->nom = $tab["nom"];
        $this->prix = $tab["prix"];
        $this->quantite = $tab["quantite"];
        $this->IdProduit = $tab["IdProduit "];
        $this->IdUser = $tab["IdUser"];

    }

    public function serialiser()
    {
        $tab = array();
        $tab["nom"] = $this->nom;
        $tab["prix"] = $this->prix;
        $tab["quantite"] = $this->quantite;
        $tab["IdProduit"] = $this->IdProduit;
        $tab["IdUser"] = $this->IdUser;


        return $tab;

    }

    /**
     * @return int
     */
    public function getIdProduit()
    {
        return $this->IdProduit;
    }

    /**
     * @param int $IdProduit
     */
    public function setIdProduit($IdProduit)
    {
        $this->IdProduit = $IdProduit;
    }

    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->IdUser;
    }

    /**
     * @param int $IdUser
     */
    public function setIdUser($IdUser)
    {
        $this->IdUser = $IdUser;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }



    public function getQuantite()
    {
        return $this->quantite;
    }

    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
}