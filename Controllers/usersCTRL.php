<?php

header("Content-Type: text/html; charset=UTF-8");

require_once '../DAOs/connexion.php';
require_once '../DAOs/usersDAO.php';

$lsMessage = "";

$prenom = filter_input(INPUT_POST, "prenom");
$nom = filter_input(INPUT_POST, "nom");
$login = filter_input(INPUT_POST, "login");
$confLogin = filter_input(INPUT_POST, "conflogin");
$mdp = filter_input(INPUT_POST, "mdp");
$sexe = filter_input(INPUT_POST, "sexe");


if ($prenom != null && $nom != null && $login != null && $confLogin != null && $mdp != null && $sexe != null ) {

    
    try {
        /*
         * Connexion
         */
        $lcnx = new PDO("mysql:host=localhost;port=3306;dbname=testuballers;", "root", "");
        $lcnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $lcnx->exec("SET NAMES 'UTF8'");

     
        $user = new Users($prenom, $nom, $login, $confLogin, $mdp, $sexe);
        $dao = new UsersDAO();
                        
    
        $dao->insert($lcnx, $user);

        $lcnx = null;
        
        $lsMessage = "OK";
    } catch (PDOException $e) {
        $lsMessage = $e->getMessage();
    }
} else {
    $lsMessage = "Toutes les saisies sont obligatoires";
}

include '../Views/formView.php';
