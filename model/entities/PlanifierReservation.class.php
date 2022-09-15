<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 09/09/2021
 * Time: 19:17
 */
class PlanifierReservation
{
    private $id;
    private $datePlanification;
    private $heureDebut;
    private $heureFin;
    private $idAdmin;
    private $idReserv;

    /**
     * PlanifierReservation constructor.
     * @param $id
     * @param $datePlanification
     * @param $heureDebut
     * @param $heureFin
     * @param $idAdmin
     * @param $idReserv
     */
    public function __construct($id, $datePlanification, $heureDebut, $heureFin, $idAdmin, $idReserv)
    {
        $this->id = $id;
        $this->datePlanification = $datePlanification;
        $this->heureDebut = $heureDebut;
        $this->heureFin = $heureFin;
        $this->idAdmin = $idAdmin;
        $this->idReserv = $idReserv;
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
    public function getDatePlanification()
    {
        return $this->datePlanification;
    }

    /**
     * @param mixed $datePlanification
     */
    public function setDatePlanification($datePlanification)
    {
        $this->datePlanification = $datePlanification;
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
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    /**
     * @param mixed $idAdmin
     */
    public function setIdAdmin($idAdmin)
    {
        $this->idAdmin = $idAdmin;
    }

    /**
     * @return mixed
     */
    public function getIdReserv()
    {
        return $this->idReserv;
    }

    /**
     * @param mixed $idReserv
     */
    public function setIdReserv($idReserv)
    {
        $this->idReserv = $idReserv;
    }
}