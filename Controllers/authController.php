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
$loginQuery = "SELECT * FROM utilisateurs WHERE login='$login'";

$res_u = mysqli_query($conn, $loginQuery);
if (mysqli_num_rows($res_u) > 0) {
    echo "Nom d'utilisateur déjà utilisé";
}
else{



$sql = "INSERT INTO utilisateurs (login, prenom, nom, password) VALUES ('$login', '$prenom', '$nom', '$password')";
$conn -> query($sql);
if(empty($login)) {
$errors['username'] = "L'identifiant est manquant";
}

if(empty($prenom)) {
    $errors['prenom'] = "Le prenom est manquant";
}

if(empty($nom)) {
    $errors['nom'] = "Le nom est manquant";
}

if(empty($password)) {
    $errors['password'] = "Le mot de passe est manquant";
}
}
}