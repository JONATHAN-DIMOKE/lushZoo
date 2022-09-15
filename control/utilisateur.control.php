<?php
/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 09/09/2022
 * Time: 18:32
 */
require_once "config/config.php";
require_once "model/DAO/ConnexionDAO.class.php";
require_once "model/DAO/UtilisateurDAO.class.php";

function displayPageAccueil(){
    require "view/pageAcceuil.php";
}

function login($username, $pwd){
    try{
        $resultBD = UtilisateurDAO::seConnecter($username, $pwd);
        if ($resultBD['username']){
            if($resultBD['typeUtilisateur'] == "Admin"){
                echo "Je suis admin";
            }elseif ($resultBD['typeUtilisateur'] == "Client"){
                echo "Je suis client";
            }
        }else{
            require "view/pageAcceuil.php";
        }
    }catch (Exception $ex){
        echo "Message ==> ".$ex->getMessage();
    }
}