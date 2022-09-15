<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 09/09/2021
 * Time: 19:14
 */
class Facture
{
    private $id;
    private $dateFact;
    private $prixFact;

    /**
     * Facture constructor.
     * @param $id
     * @param $dateFact
     * @param $prixFact
     */
    public function __construct($id, $dateFact, $prixFact)
    {
        $this->id = $id;
        $this->dateFact = $dateFact;
        $this->prixFact = $prixFact;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDateFact()
    {
        return $this->dateFact;
    }

    /**
     * @param mixed $dateFact
     */
    public function setDateFact($dateFact)
    {
        $this->dateFact = $dateFact;
    }

    /**
     * @return mixed
     */
    public function getPrixFact()
    {
        return $this->prixFact;
    }

    /**
     * @param mixed $prixFact
     */
    public function setPrixFact($prixFact)
    {
        $this->prixFact = $prixFact;
    }
}