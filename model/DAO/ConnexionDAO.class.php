<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 06/09/2021
 * Time: 19:35
 */
class ConnexionDAO
{
    public static function getConnection(){
        try{
            return new PDO("mysql:host=localhost;dbname=bd_lushizoo",
                "root", "",
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch (Exception  $ex){
            echo "Message = ".$ex->getMessage();
        }
    }
}