<?php
session_start();
if(isset($_POST['valide'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut ="chris";
        $mdp_par_defaut ="admin";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location: acceuil.php');
        }
        else {
            echo"Mot de passe incorrect";
        }

    }
    else{
        echo"Completer le champ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
        <head>
        <meta charset="UTF-8">
          
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <title>Document</title>
            <?php include_once "../include/include.php"?>
            <?php include_once "../include/include1.php"?>
        </head>
        <body>
        <?php include_once "../include/header.php"?>
               <div>
                    <h1>Se connecter</h1>
                    <form action="" method="POST">
                        <input type="text" name="pseudo"  autocomplete="off" placeholder="nom"> <br><br>
                        <input type="password" name="mdp" placeholder="Mot de pass"><br><br>
                        
                        <input type="submit" name="valide" >
                    </form>

               </div>

        
        </body>
</html>