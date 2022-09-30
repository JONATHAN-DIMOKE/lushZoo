<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 09/09/2021
 * Time: 19:18
 */
class PlanifierReservationDAO
{
    public static function planifierReserv($idReserv, $heureDebut, $heureFin, $idAdmin){
        try{
            $req = "CALL proc_planifier_reserv(?, ?, ?, ?)";
            $req_prepare = ConnexionDAO::getConnexion()->prepare($req);
            $req_prepare->execute(array(
                $idReserv,
                $heureDebut,
                $heureFin,
                $idAdmin
            ));
            $req_prepare->closeCursor();
        }catch (Exception $ex){
            echo "Message =>".$ex->getMessage();
        }
    }

    public static function listerToutesReservation(){
        try{
            $req = "CALL proc_getAllReservations()";
            $req_prepare = ConnexionDAO::getConnexion()->prepare($req);
            $req_prepare->execute();
            $resultBD = $req_prepare->fetchAll(PDO::FETCH_ASSOC);
            $req_prepare->closeCursor();
            return $resultBD;
        }catch (Exception $ex){
            echo "Message =>".$ex->getMessage();
        }
    }
}