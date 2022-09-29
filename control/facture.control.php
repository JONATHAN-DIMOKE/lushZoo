<?php
/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 29/09/2022
 * Time: 18:58
 */
require_once "model/DAO/FactureDAO.class.php";
function payerFacture($idReserv){
    try{
        $listReserv = ReservationDAO::listerToutesReservation($_SESSION['user']['id']);
        FactureDAO::payerFacture($idReserv);
        require "view/backend/reserver.view.php";
    }catch (Exception $ex){
        echo "Message ==> ".$ex->getMessage();
    }
}