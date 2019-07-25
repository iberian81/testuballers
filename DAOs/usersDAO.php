<?php

require_once '../Models/users.php';


class UsersDAO {
   
    
  
    function insert($pdo, Users $user) {
        
        $i = 0;
        
        try {
        
            $cmd = $pdo->prepare("INSERT INTO users(prenom, nom, login, confLogin, mdp, sexe) VALUES(?,?,?,?,?,?)");
            
            $cmd->bindValue(1, $user->getPrenom());
            $cmd->bindValue(2, $user->getNom());
            $cmd->bindValue(3, $user->getLogin());
            $cmd->bindValue(4, $user->getConflogin());
            $cmd->bindValue(5, $user->getMdp());
            $cmd->bindValue(6, $user->getSexe());
                     
      
            $cmd->execute();
            
            $i = 1;
           
        } catch (Exception $e) {
            
            $i = -1;
            echo $e->getMessage();
        }

        return $i;
    }
    
    
     function selectOne($pdo, Users $login) {
    
        $t = array();
        try {
            
            $cursor = $pdo->prepare("SELECT * FROM users WHERE login = ?");
           
            $cursor->bindParam(1, $login);
            
            $cursor->execute();
            
            $record = $cursor->fetch();
           
            $t[0] = $record[0];
           
            $cursor->closeCursor();
            
        } catch (Exception $e) {
            $t[] = $e->getMessage();
        }
        
        return $t;
    }
    
    
    
}


?>
