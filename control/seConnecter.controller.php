<?php
/**
 * Created by PhpStorm.
 * User: CHRISTIAN DONALD
 * Date: 09/10/2021
 * Time: 16:35
 */
require_once "../model/DAO/ConnexionDAO.class.php";
require_once "../model/DAO/UtilisateurDAO.class.php";
try{
    $resultDB = UtilisateurDAO::seConnecter($_POST['username'],$_POST['pwd']);
    if ($resultDB['username']){
        header("location: ../view/backend/");
    }
    else{
        echo  "Vous n'etes pas connecté";
    }
}catch (Exception $ex){
    echo "Message => ".$ex -> getMessage();
}