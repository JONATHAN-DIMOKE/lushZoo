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
            session_start();
            $_SESSION['user'] = $resultBD;
            /**
            echo "<pre>";
                print_r($_SESSION['user']);die(); Afficher session comme table associatif
            echo "</pre>";
             **/
            if($resultBD['typeUtilisateur'] == "Admin"){
                require "view/backend/index.html";
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