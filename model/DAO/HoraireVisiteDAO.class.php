<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 03/10/2022
 * Time: 18:59
 */
class HoraireVisiteDAO
{
    public static function listeTousHoraires(){
        try{
            $req = "CALL proc_getAllHoraires()";
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