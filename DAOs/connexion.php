<?php


declare(strict_types = 1);


function getConnexion(string $ip, string $port, string $db, string $user, string $pwd) {

    try {
        // Connexion
        $connexion = new PDO("mysql:host=$ip;port=$port;dbname=$db;", $user, $pwd);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->exec("SET NAMES 'UTF8'");
    } catch (PDOException $e) {
        echo $e->getMessage();
        $connexion = null;
    }

    return $connexion;
}


?>
