<?php
class Type
{
    private $lien;

    public function __construct()
    {
        $this->lien = 0;
    }

    public function renseigner($tab)
    {
        $this->lien = $tab["lien"];
    }

    public function serialiser()
    {
        $tab = array();
        $tab["lien"] = $this->lien;
        return $tab;

    }

    public function getLien()
    {
        return $this->lien;
    }

    public function setLien($lien)
    {
        $this->lien = $lien;
    }
}
