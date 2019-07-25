<?php

header("Content-Type: text/html; charset=UTF-8");

require_once '../DAOs/connexion.php';
require_once '../DAOs/usersDAO.php';

$lsMessage = "";

$login = filter_input(INPUT_POST, "input1");
$mdp = filter_input(INPUT_POST, "input2");



if ($login != null && $mdp != null ) {

    
    try {
       
        $connexion = new PDO("mysql:host=127.0.0.1;port=3306;dbname=testuballers;", "root", "");
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->exec("SET NAMES 'UTF8'");

       
        $lsSelect = "SELECT * FROM users WHERE login=? AND mdp=?";
        
        $curseur = $connexion->prepare($lsSelect);
        
        $curseur->bindParam(1, $login);
        $curseur->bindParam(2, $mdp);
        
       
        $curseur->execute();
        
        $enregistrement = $curseur->fetch();
        if ($enregistrement === FALSE) {
            $lsMessage = "KO, vous n'êtes pas connecté";
        } else {
            $lsMessage = "OK, vous êtes connecté";
        }
    } catch (Exception $e) {
        $lsMessage = "Erreur : " . $e->getMessage() . "<br>";
    }
    $connexion = null;
} else {
    $lsMessage = "Toutes les saisies sont obligatoires";
}

echo $lsMessage;
?>