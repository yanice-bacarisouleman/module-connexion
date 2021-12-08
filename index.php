<?php
session_start();
require 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Projekt|FORT</title>
</head>
<body>
<header>    
    <div class="h_container">
        <div class="titre">
        <h1>Projekt|Fort</h1>
        </div>

        <ul class="connexion">
        <?php 
          
          //Change le header en fonction des paramètres 
         if(isset($_SESSION['login'])){
            //Acceuil
            echo "<li><a href='index.php'>Acceuil</a></li>";

            //Nom d'utilisateur
            echo "<li><a href='profile.php'>";
            echo $_SESSION['login'];
            echo "</li></a";
          
            //Déconnexion
            echo "<li><a href='logout.php'>";
            echo 'Déconnexion';
            echo "</a></li>";
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
            
  </div>
</header>


























<!---Demande à l'utilisateur de se connecter!--->
        <?php
        if(isset($_SESSION['login'])){
        }
            else{
                require 'login.php';
             }
             ?>




<div class="text_container">

    <div class="text">
        <h2>Projekt|FORT c'est quoi ?</h2></br>
        <p>Projekt|FORT est un projet principalement basé autour des jeux de combats, nous cherchons à créer notre propre jeux de combat mais aussi aider les autres communauté à créer leurs propres jeux. </p></br>
        
<h2>Quels sont les objectifs de Projekt|FORT ?</h2></br>
        <p>-Faire notre propre jeux.(L'équipe cherche aussi à recruter des programmeurs pour notre projet basé sur Unity.)</br>
        -Aider la communauté de moddeurs.</br>
        -Facilité la communication entre moddeurs et developpeurs.

           </p>

<h2>Quels genre de jeux allons nous faire ?</h2></br>
    <p>Nous sommes actuellement entrain de développer un 2.5d fighting game similaire aux jeux tel que Guilty Gear. , Street Fighter etc... mais contrairement à Street Fighter le jeux serait plus orienté vers les combos, bien évidemment la neutral sera toujours un aspect très présent dans le jeux,le jeux sera aussi facile à prendre un main pour les nouveau mais il y aura toujours de nouvelles choses à apprendre.</p>
    </div>


    
    
</div>











<footer>
 <div class="f_container">

    

    <div class="f_first">
        <h3>Contact</h3>
        <ul class="r_first">
       <li><a href="https://github.com/yanice-bacarisouleman">Github Personnel</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="https://github.com/ProjektFORT">Github</a></li>
        <li><a href="#">(Discord En construction)</a></li>
        </ul>    
    </div>
</div>

</footer>
</body>
</html>