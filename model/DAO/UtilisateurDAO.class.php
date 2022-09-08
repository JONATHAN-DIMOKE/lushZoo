<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 06/09/2021
 * Time: 19:55
 */
class UtilisateurDAO
{
    public static function seConnecter($username, $pwd){
        try{
            $req = "CALL proc_seConnecter(?, ?)";
            $req_prepare = ConnexionDAO::getConnection()->prepare($req);
            $req_prepare->execute(array($username, $pwd));
            $resultBD = $req_prepare->fetch(PDO::FETCH_ASSOC);
            return $resultBD;
        }catch (Exception $ex){
            echo "Message = ".$ex->getMessage();
        }
    }
}