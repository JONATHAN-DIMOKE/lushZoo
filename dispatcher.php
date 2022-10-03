<?php
require "control/utilisateur.control.php";
require "control/reservervation.control.php";
require "model/entities/Reservation.class.php";
require "control/facture.control.php";
require "control/planifierReservation.control.php";
require "control/horaireVisites.control.php";
require "partial/error.php";
session_start();
if(isset($_GET['action'])){
    if($_GET['action'] == "login"){
        login($_POST['username'], $_POST['pwd']);
    }elseif ($_GET['action'] == "createAccount"){
        $user = new Utilisateur(0, "", $_POST['nomComplet'], $_POST['adresse'], $_POST['genre'], $_POST['tel'], $_POST['email'], "", $_POST['username'], $_POST['pwd'], "", "");
        createAccount($user);
    }elseif ($_GET['action'] == "form_reservation"){
        form_reservation();
    }elseif ($_GET['action'] == "passerReservation"){
        $reservation = new Reservation(0, 0, $_SESSION['user']['id'], $_POST['dateReserv'], $_POST['heureDebut'], $_POST['heureFin'], $_POST['nbreVisiteur']);
        passerReservation($reservation, $_POST['idHoraire']);
    }elseif ($_GET['action'] == "deconnection"){
        deconnection($_SESSION['user']['id']);
    }elseif ($_GET['action'] == "payerFact"){
        payerFacture($_GET['idReserv']);
    }elseif ($_GET['action'] == "form_planifier_reservation"){
        form_planifier_reservation();
    }elseif ($_GET['action'] == "planifier_reservation"){
        planifier_reservation($_POST['idReserv'], $_POST['heureDebut'], $_POST['heureFin']);
    }elseif ($_GET['action'] == "horaireVisite"){
        list_horaireVisite();
    }elseif ($_GET['action'] == "pagePrincipale"){
        pagePrincipale();
    }
}else{
    displayPageAccueil();
}