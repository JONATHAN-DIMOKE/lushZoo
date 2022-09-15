<?php
require "control/utilisateur.control.php";

if(isset($_GET['action'])){
    if($_GET['action'] == "login"){
        login($_POST['username'], $_POST['pwd']);
    }
}else{
    displayPageAccueil();
}