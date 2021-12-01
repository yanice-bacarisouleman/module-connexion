<?php require_once 'Controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>

<?php


?>
<body>
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
</body>
</html>