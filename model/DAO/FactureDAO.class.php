<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 09/09/2021
 * Time: 19:16
 */
class FactureDAO
{
    public static function payerFacture($idReserv){
        try{
            $req = "CALL proc_payerFacture(?)";
            $req_prepare = ConnexionDAO::getConnexion()->prepare($req);
            $req_prepare->execute(array(
                $idReserv
            ));
            $req_prepare->closeCursor();
        }catch (Exception $ex){
            echo "Message =>".$ex->getMessage();
        }
    }
}