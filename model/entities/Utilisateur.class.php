<?php

/**
 * Created by PhpStorm.
 * User: Josh DIMOKE
 * Date: 06/09/2021
 * Time: 19:55
 */
class Utilisateur
{
    private $id;
    private $matricule;
    private $nomComplete;
    private $adresse;
    private $tel;
    private $email;
    private $typeUtilisateur;
    private $username;
    private $pwd;
    private $statut;
    private $etat;

    /**
     * UtilisateurDAO constructor.
     * @param $id
     * @param $matricule
     * @param $nomComplete
     * @param $adresse
     * @param $tel
     * @param $email
     * @param $typeUtilisateur
     * @param $username
     * @param $pwd
     * @param $statut
     * @param $etat
     */
    public function __construct($id, $matricule, $nomComplete, $adresse, $tel, $email, $typeUtilisateur, $username, $pwd, $statut, $etat)
    {
        $this->id = $id;
        $this->matricule = $matricule;
        $this->nomComplete = $nomComplete;
        $this->adresse = $adresse;
        $this->tel = $tel;
        $this->email = $email;
        $this->typeUtilisateur = $typeUtilisateur;
        $this->username = $username;
        $this->pwd = $pwd;
        $this->statut = $statut;
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param mixed $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    /**
     * @return mixed
     */
    public function getNomComplete()
    {
        return $this->nomComplete;
    }

    /**
     * @param mixed $nomComplete
     */
    public function setNomComplete($nomComplete)
    {
        $this->nomComplete = $nomComplete;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTypeUtilisateur()
    {
        return $this->typeUtilisateur;
    }

    /**
     * @param mixed $typeUtilisateur
     */
    public function setTypeUtilisateur($typeUtilisateur)
    {
        $this->typeUtilisateur = $typeUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param mixed $pwd
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }
}