

<?php
   session_start();
   if(!$_SESSION['mdp']){
       header('Location: authentification.php');
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
    <?php include_once "../SRC/getCompte.php"?>
       <div class="text-center"><h1>CREATION D'UN COMPTE</h1><hr></div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="../Acceuil/Compte.php" method="POST">
                    <section class="row" style="margin: 15px;">
                        <div class="col-sm-6">
                           
                            <label for="">Nom</label>
                            <input type="text" name="nomCompte" class="form-control" required>

                            <label class="form-label">Prenom</label>
                            <input type="text" name="prenomCompte" class="form-control" required>

                            <label class="form-label">Nom de famille</label>
                            <input type="text" name="nom_familleCompte" class="form-control" required>

                            <label class="form-label">Adresse </label>
                            <input type="text" name="adresseCompte" class="form-control" required>

                            <label for="">Date de Naissance</label>
                            <input name="dateNaissance" type="date" class="form-control" required>
                            

                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Ville</label>
                            <input type="text" name="villeCompte" class="form-control" required>

                            <label for="">Numero telephone</label>
                            <input type="text" name="numTelCompte" class="form-control" required>

                            <label class="form-label">Email</label>
                            <input type="email" name="emailCompte" class="form-control" required>
                        </div>
                    </section>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4"><br>
                            <button type="submit" value="Envoyer" class="btn btn-block" style="background-color: rgb(8, 134, 238); color:white; width:200px ; margin-left: auto; margin-right: auto;">Enregistrer</button>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </form>
                
            </div> 
            <div class="col-2"></div>

            <div class="mx-5">
                <h2 class="text-center"> LISTES DES COMPTES</h2>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Nom famille</th>
                            <th>Adresse</th>
                            <th>Date de naissance</th>
                            <th>Ville</th>
                            <th>Numero</th>
                            <th>Email</th>
                        </tr>

                        <?php
                        $Comptes = getListeComptes();
                        for ($i = 0; $i < count($Comptes); $i++)  {
                            echo "<tr>";
                            // echo "<td scope = \"row\">" .$Comptes[$i]->getnumCompte()."</td>";
                            echo "<td scope = \"row\">" .$Comptes[$i]->getNomCompte()."</td>";
                            echo "<td scope = \"row\">" .$Comptes[$i]->getPrenomCompte()."</td>";
                            echo "<td scope = \"row\">" .$Comptes[$i]->getNom_familleCompte()."</td>";
                            echo "<td scope = \"row\">" .$Comptes[$i]->getAdresseCompte()."</td>";
                            echo "<td scope = \"row\">" .$Comptes[$i]->getVilleCompte()."</td>";
                            echo "<td scope = \"row\">" .$Comptes[$i]->getNumtelCompte()."</td>";
                            echo "<td scope = \"row\">" .$Comptes[$i]->getDateNaissance()."</td>";
                            echo "<td scope = \"row\">" .$Comptes[$i]->getEmailCompte()."</td>";
                        }            
                        ?>
                    </thead>
                </table>
            </div>
        </div>
        <br>
   
</body>
</html>