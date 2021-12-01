<?php
require 'db.php';

if(isset($_POST['login-btn'])){
    $login=$_POST['login'];
    $password=$_POST['password'];
    $sql= mysqli_query ($conn,"SELECT * FROM utilisateurs WHERE login='$login' AND password='$password'");
    $res= mysqli_fetch_all($sql); 
    $_SESSION['success'] = "";



    
    if (empty($res)) {
        echo "Utilisateur/Mot de passe incorrect.";
    }
     else {
         if($res[0][1] == $login){
            session_start();
            if ( $login == 'admin'){
                $_SESSION['login'] = $res[0][1];
                $_SESSION['nom'] = $res[0][3]; 
                $_SESSION['id'] = $res[0][0];
                $_SESSION['prenom'] = $res[0][2];
                $_SESSION['password'] = $res[0][4];
                header ("refresh:0.1;url=admin.php");
    
            }
            else {
                $_SESSION['login'] = $res[0][1];
                $_SESSION['nom'] = $res[0][3]; 
                $_SESSION['id'] = $res[0][0];
                $_SESSION['prenom'] = $res[0][2];
                $_SESSION['password'] = $res[0][4];

                header ("refresh:0.1;url=index.php");

            }
         
     }
         else {
             echo "Utilisateur/Mot de passe incorrect.";
         }
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
</head>
<body>
<form action="" method="post">
    <label for="login">Nom d'utilisateur</label>
    <input type="text" id="login" name="login">
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password">
    <button type="submit" name="login-btn">Envoyer</button>
    </form>
</body>
</html>