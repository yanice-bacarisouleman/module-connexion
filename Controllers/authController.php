<?php

require 'db.php';

$errors = array();
$login = '';
$prenom = '';
$nom = '';


if (isset($_POST['signup-btn'])) {
$login = $_POST['login'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$password = $_POST['password'];
$password_conf = $_POST['password_conf'];
$loginQuery = "SELECT * FROM utilisateurs WHERE login='$login'";

$res_u = mysqli_query($conn, $loginQuery);
if ((mysqli_num_rows($res_u) > 0) || ($password_conf !== $password)){
    if (mysqli_num_rows($res_u) > 0){
    echo "Nom d'utilisateur déjà utilisé";}
    if($password_conf !== $password){
        echo "</br>Mot de passe/Confirmation non identique";
    }
}
else{

$sql = "INSERT INTO utilisateurs (login, prenom, nom, password) VALUES ('$login', '$prenom', '$nom', '$password')";
$conn -> query($sql);
echo "inscription reussit";

}
}


?>