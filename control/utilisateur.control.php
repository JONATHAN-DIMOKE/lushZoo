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
require_once "model/entities/Utilisateur.class.php";

function displayPageAccueil(){
    try{
        //creer le premier user admin s'il n'existe pas dans la BD
        $resultBD = UtilisateurDAO::createFirstUser();
        require "view/pageAcceuil.php";
    }catch (Exception $ex){
        echo "Message ==> ".$ex->getMessage();
    }
}

function login($username, $pwd){
    try{
        $resultBD = UtilisateurDAO::seConnecter($username, $pwd);
        if ($resultBD['username']){
            $_SESSION['user'] = $resultBD;
            /**
            echo "<pre>";
                print_r($_SESSION['user']);die(); Afficher session comme table associatif
            echo "</pre>";
             **/
            if($resultBD['typeUtilisateur'] == "Admin"){
                require "view/backend/index.php";
            }elseif ($resultBD['typeUtilisateur'] == "Client"){
                require "view/backend/index.php";
            }
        }else{
            require "view/pageAcceuil.php";
        }
    }catch (Exception $ex){
        echo "Message ==> ".$ex->getMessage();
    }
}

function createAccount($user){
    try{
        UtilisateurDAO::createAccount($user);
        require "view/pageAcceuil.php";
    }catch (Exception $ex){
        echo "Message ==> ".$ex->getMessage();
    }
}

function deconnection($id){
    try{
        UtilisateurDAO::deconnection($id);
        session_destroy();
        require "view/pageAcceuil.php";
    }catch (Exception $ex){
        echo "Message ==> ".$ex->getMessage();
    }
}