<?php
/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 30/09/2022
 * Time: 18:56
 */
require_once "config/config.php";
require_once "model/DAO/ConnexionDAO.class.php";
require_once "model/DAO/PlanifierReservationDAO.class.php";

function form_planifier_reservation(){
    try{
        $count = 1;
        $listReserv = PlanifierReservationDAO::listerToutesReservation();
        require "view/backend/planifierReserv.view.php";
    }catch (Exception $ex){
        echo "Message ==> ".$ex->getMessage();
    }
}

function planifier_reservation($idReserv, $heureDebut, $heureFin){
    try{
        PlanifierReservationDAO::planifierReserv($idReserv, $heureDebut, $heureFin, $_SESSION['user']['id']);
        form_planifier_reservation();
    }catch (Exception $ex){
        echo "Message ==> ".$ex->getMessage();
    }
}