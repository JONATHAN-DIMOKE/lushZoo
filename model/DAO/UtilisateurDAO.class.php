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
            $req_prepare = ConnexionDAO::getConnexion()->prepare($req);
            $req_prepare->execute(array($username, $pwd));
            $resultBD = $req_prepare->fetch(PDO::FETCH_ASSOC);
            $req_prepare->closeCursor();
            return $resultBD;
        }catch (Exception $ex){
            echo "Message = ".$ex->getMessage();
        }
    }

    public static function createFirstUser(){
        try{
            $req = "CALL proc_createFirstUser()";
            $req_prepare = ConnexionDAO::getConnexion()->prepare($req);
            $req_prepare->execute();
            $resultBD = $req_prepare->rowCount();
            $req_prepare->closeCursor();
        }catch (Exception $ex){
            echo "Message = ".$ex->getMessage();
        }
    }

    public static function createAccount(Utilisateur $utilisateur){
      try{
          $req = "CALL proc_createAccount(?, ?, ?, ?, ?, ?, ?)";
          $req_prepare = ConnexionDAO::getConnection()->prepare($req);
          $req_prepare->execute(array(
              $utilisateur->getNomComplete(),
              $utilisateur->getAdresse(),
              $utilisateur->getGenre(),
              $utilisateur->getTel(),
              $utilisateur->getEmail(),
              $utilisateur->getUsername(),
              $utilisateur->getPwd()
          ));
          $req_prepare->closeCursor();
      }catch (Exception $ex){
          echo "Message = ".$ex->getMessage();
      }
    }
}