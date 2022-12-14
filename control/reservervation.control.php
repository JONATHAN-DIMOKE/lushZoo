<?php
/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 26/09/2022
 * Time: 19:51
 */
require_once "config/config.php";
require_once "model/DAO/ConnexionDAO.class.php";
require_once "model/DAO/ReservationDAO.class.php";
require_once "model/DAO/HoraireVisiteDAO.class.php";

function form_reservation(){
    try{
        $listReserv = ReservationDAO::listerToutesReservation($_SESSION['user']['id']);
        /*echo "<pre>";
            print_r($listReserv);die();
        echo "</pre>";*/

        require "view/backend/reserver.view.php";
    }catch (Exception $ex){
        error($ex);
    }
}

function passerReservation($reservation, $idHoraire){
    try{
        $listHoraire = HoraireVisiteDAO::listeTousHoraires();
        ReservationDAO::reserverVisite($reservation, $idHoraire);
        require "view/backend/dailyHoraire.view.php";
    }catch (Exception $ex){
        error($ex);
    }
}