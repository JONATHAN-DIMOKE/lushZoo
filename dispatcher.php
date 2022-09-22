<?php
require "control/utilisateur.control.php";

if(isset($_GET['action'])){
    if($_GET['action'] == "login"){
        login($_POST['username'], $_POST['pwd']);
    }elseif ($_GET['action'] == "createAccount"){

        $user = new Utilisateur(0, "", $_POST['nomComplet'], $_POST['adresse'], $_POST['genre'], $_POST['tel'], $_POST['email'], "", $_POST['username'], $_POST['pwd'], "", "");
        createAccount($user);
    }
}else{
    displayPageAccueil();
}