<?php
/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 03/10/2022
 * Time: 18:58
 */
require_once "config/config.php";
require_once "model/DAO/ConnexionDAO.class.php";
require_once "model/DAO/HoraireVisiteDAO.class.php";

function list_horaireVisite(){
    try{
        $listHoraire = HoraireVisiteDAO::listeTousHoraires();
        require "view/backend/dailyHoraire.view.php";
    }catch (Exception $ex){
        echo "Message ==> ".$ex->getMessage();
    }
}