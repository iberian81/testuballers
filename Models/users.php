<?php


class Users {
    
    private $prenom;
    private $nom;
    private $login;
    private $conflogin;
    private $mdp;
    private $sexe;
   
  
    function __construct($prenom, $nom, $login, $conflogin, $mdp, $sexe) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->login = $login;
        $this->conflogin = $conflogin;
        $this->mdp = $mdp;
        $this->sexe = $sexe;
    }
 
        
    function getPrenom() {
        return $this->prenom;
    }

    function getNom() {
        return $this->nom;
    }

    function getLogin() {
        return $this->login;
    }

    function getConflogin() {
        return $this->conflogin;
    }

    function getMdp() {
        return $this->mdp;
    }
    
    function getSexe() {
        return $this->sexe;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setConflogin($conflogin) {
        $this->conflogin = $conflogin;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }
 


    
}
