<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 09/09/2021
 * Time: 19:19
 */
class ReservationDAO
{
    public static function reserverVisite(Reservation $reservation){
        try{
            $req = "CALL proc_reservation(?, ?, ?, ?, ?)";
            $req_prepare = ConnexionDAO::getConnexion()->prepare($req);
            $req_prepare->execute(array(
                $reservation->getIdClient(),
                $reservation->getDateReserv(),
                $reservation->getHeureDebut(),
                $reservation->getHeureFin(),
                $reservation->getNbreVisiteur()
            ));
            $req_prepare->closeCursor();
        }catch (Exception $ex){
            echo "Message =>".$ex->getMessage();
        }
    }



    public static function listerToutesReservation($idClient){
        try{
            $req = "CALL proc_getAllReservations(?)";
            $req_prepare = ConnexionDAO::getConnexion()->prepare($req);
            $req_prepare->execute(array($idClient));
            $resultBD = $req_prepare->fetchAll(PDO::FETCH_ASSOC);
            $req_prepare->closeCursor();
            return $resultBD;
        }catch (Exception $ex){
            echo "Message =>".$ex->getMessage();
        }
    }

}