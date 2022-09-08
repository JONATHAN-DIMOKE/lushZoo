<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 09/09/2021
 * Time: 19:18
 */
class Reservation
{
    private $id;
    private $idFact;
    private $idClient;
    private $dateReserv;
    private $heureDebut;
    private $heureFin;
    private $nbreVisiteur;

    /**
     * Reservation constructor.
     * @param $id
     * @param $idFact
     * @param $idClient
     * @param $dateReserv
     * @param $heureDebut
     * @param $heureFin
     * @param $nbreVisiteur
     */
    public function __construct($id, $idFact, $idClient, $dateReserv, $heureDebut, $heureFin, $nbreVisiteur)
    {
        $this->id = $id;
        $this->idFact = $idFact;
        $this->idClient = $idClient;
        $this->dateReserv = $dateReserv;
        $this->heureDebut = $heureDebut;
        $this->heureFin = $heureFin;
        $this->nbreVisiteur = $nbreVisiteur;
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
    public function getIdFact()
    {
        return $this->idFact;
    }

    /**
     * @param mixed $idFact
     */
    public function setIdFact($idFact)
    {
        $this->idFact = $idFact;
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @return mixed
     */
    public function getDateReserv()
    {
        return $this->dateReserv;
    }

    /**
     * @param mixed $dateReserv
     */
    public function setDateReserv($dateReserv)
    {
        $this->dateReserv = $dateReserv;
    }

    /**
     * @return mixed
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * @param mixed $heureDebut
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;
    }

    /**
     * @return mixed
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * @param mixed $heureFin
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;
    }

    /**
     * @return mixed
     */
    public function getNbreVisiteur()
    {
        return $this->nbreVisiteur;
    }

    /**
     * @param mixed $nbreVisiteur
     */
    public function setNbreVisiteur($nbreVisiteur)
    {
        $this->nbreVisiteur = $nbreVisiteur;
    }

}