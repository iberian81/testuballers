<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/style.css" rel="stylesheet">
    <title>Authentification</title>
</head>

<body>
    <section class="wrapper">
        <form action="../Controllers/authCTRL.php" method="POST" id="form1">
            <div class="input1">
                <label for="input1">Adresse e-mail ou mobile</label>
                <input type="text" name="input1" id="input1" placeholder="votre login">
            </div>
            <div class="input2">
                <label for="input2">Mot de passe</label>
                <input type="password" name ="input2" id="input2" placeholder="votre mot de passe">
                <a href="#">Informations de compte oubliées ?</a>
            </div>
            <button type="submit">Connexion</button>
        </form>
        <?php
        $message = "";
        echo $message;
        ?>

        <form action="../Controllers/usersCTRL.php" method="POST" id="form2">

            <h2>Inscription</h2>
            <h3>C'est gratuit (et ça restera toujours)</h3>
            <div class="inscription">
                <input type="text" id="prenom" name="prenom" placeholder="Prénom">
                <input type="text" id="nom" name="nom" placeholder="Nom de famille">
                <input type="text" id="login" name="login" placeholder="Numéro de mobile ou email">
                <input type="text" id="conflogin" name="conflogin" placeholder="Confirmer numéro de mobile ou email">
                <input type="password" id="mdp" name="mdp" placeholder="Nouveau mot de passe">
            </div>

            <h3>Date de naissance</h3>
            <div class="date">
                <select name="dateNaissance">
                    <option>Jour</option>
                    <option>1</option>
                </select>
                <select>
                    <option>Mois</option>
                    <option>1</option>
                </select>
                <select>
                    <option>Année</option>
                    <option>1</option>
                </select>
                <a href="#">Pourquoi indiquer ma date de naissance?</a>
            </div>

            <div class="radio">
                <input type="radio" id="r1" name="sexe" value="femme">
                <label for="r1">Femme</label>
                <input type="radio" id="r2" name="sexe" value="homme">
                <label for="r2">Homme</label>
            </div>

            <p class="conditions">En cliquant sur Inscription, vous acceptez nos conditions
                et indiquez que vous avez lu notre Politique d'utilisation
                des données, y compris notre Utilisation des cookies. Vous
                pourrez recevoir des notifications par texto de la part de
                Facebook et pourrez vous désabonner à tout moment
            </p>

            <button type="submit">Inscription</button>

        </form>
        
         <?php
            $lsMessage= "";
            echo $lsMessage;
           ?>
    </section>

    
   
    
    
</body>
</html>