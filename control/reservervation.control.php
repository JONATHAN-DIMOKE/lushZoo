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

function passerReservation($reservation){
    try{
        ReservationDAO::reserverVisite($reservation);
        form_reservation(); //appel du controlleur form_reservation()
    }catch (Exception $ex){
        error($ex);
    }
}