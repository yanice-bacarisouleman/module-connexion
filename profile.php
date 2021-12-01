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
echo 'Connecté en tant que '.$_SESSION['login'];

?>



<form action="" method="post">
    <label for="prenom">Prenom</label>
    <input type="text" id="prenom" name="prenom" required>

    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom">

    <label for="login">Nom d'utilisateur</label>
    <input type="text" id="login" name="login">

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password">
    <button type="submit" name="signup-btn">Envoyer</button>

    </form>