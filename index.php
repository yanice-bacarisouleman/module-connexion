<?php
session_start();
require 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title> </title>
</head>
<body>
<header>    
    <div class="h_container">
        <div class="titre">
        <h1>H.M.School</h1>
        </div>

        <ul class="connexion">
        <?php 
          
          //Change le header en fonction des paramètres 
         if(isset($_SESSION['login'])){
            //Acceuil
            echo "<li><a href='index.php'>Acceuil</a></li>";

            //Nom d'utilisateur
            echo "<li><a>";
            echo $_SESSION['login'];
            echo "</li></a";
            //Déconnexion
            echo "<li><a href='logout.php'>Déconnexion</a></li>";
                        }
         else{ 
                //Acceuil
                echo "<li><a 
                     href='index.php'>Acceuil</a></li>";
                //Connexion
                echo "<li><a href='login.php'>Connexion</a></li>";
                //Inscription
                echo "<li><a href='inscription.php'>Inscription</a></li>";

          

           }

          ?>
            
            <li><a href="binance.com">Equipe</a></li> 
            

    </div>
</header>

<div class="i_container"></div>








<footer>
<div class="f_container">

    

    <div class="f_first">
        <h3>Contact</h3>
        <ul class="r_first">
       <li><a href="#">Github</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></li>
        <li><a href="#">Discord</a></li>
        </ul>    
    </div>
</div>

</footer>
</body>
</html>

<!--Affiche le nom de l'utilisateur connecté-!-->


        <?php
        if(isset($_SESSION['login'])){
  
            echo 'Connecté en tant que '.$_SESSION['login'];
       }
            else{
                 echo "<a href='login.php'>Veuillez vous connecter.</a>";
            }
             ?>



    </footer>
</body>
</html>