<?php
session_start();
require 'db.php';

if(isset($_POST['signup-btn'])){
    $id=$_SESSION['id'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $login=$_POST['login'];
    $password=$_POST['password'];

    $select = "SELECT * FROM utilisateurs where id= $id";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);

    $res= $row['id'];
        if ($res === $id)
    {
        $update = "UPDATE utilisateurs set prenom='$prenom',nom='$nom',login='$login',password='$password' where id='$id'";
        $sql2=mysqli_query($conn,$update);
    }

    $select = "SELECT * FROM utilisateurs where id= $id";
$sql = mysqli_query($conn,$select);
$row = mysqli_fetch_assoc($sql);
$_SESSION["login"] = $row['login'];
header ("refresh:0.1;url=index.php");
}

?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<div class="case_log">
        <h2>Modifier Votre Profil</h2>
    </div>

<form action="" method="post">
        
 <?php echo 'Connecté en tant que '.$_SESSION['login']; ?>

<div class="input_">
    <label for="prenom">Prenom</label>
    <input type="text" id="prenom" name="prenom" required>
</div>

<div class="input_">   
    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom">
</div>
    
<div class="input_">
    <label for="login">Nom d'utilisateur</label>
    <input type="text" id="login" name="login">
</div>
    
<div class="input_">
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password">
</div>    

<div class="input_">
    <button type="submit" name="signup-btn" class="btn">Modifier</button>
</div>

    </form>






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