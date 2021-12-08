<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <div class="case_log">
        <h2>Inscription</h2>
    </div>

    <form action="" method="post">
        <?php require 'Controllers/authController.php'; ?>

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
        
        <div class="btn">    
            <button type="submit" name="signup-btn" class="btn">Envoyer</button>
        </div>
    </form>
</body>
</html>