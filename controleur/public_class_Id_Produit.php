<?php
/**
 * Created by PhpStorm.
 * User: toshiba
 * Date: 14/06/2018
 * Time: 13:40
 */

class Id_Produit
{
    private $IdProduit;

    public function __construct()
    {
        $this->IdProduit = 0;
    }

    public function renseigner($tab)
    {
        $this->IdProduit = $tab["IdProduit"];
    }

    public function serialiser()
    {
        $tab = array();
        $tab["IdProduit"] = $this->IdProduit;
        return $tab;

    }

    public function getId_Produit()
    {
        return $this->IdProduit;
    }

    public function setId_Produit($IdProduit)
    {
        $this->IdProduit = $IdProduit;
    }
}