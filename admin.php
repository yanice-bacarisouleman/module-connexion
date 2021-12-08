<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Page Admin</title>
</head>
<body>
<?php

session_start();
require 'db.php';
//Si l'utilisateur n'est pas connecté en tant que "Admin" il sera redirectinner vers la page d'acceuil
if($_SESSION['login'] === 'admin'){
$select = "SELECT * FROM utilisateurs";
$sql = mysqli_query($conn,$select);
$row = mysqli_fetch_all($sql, MYSQLI_ASSOC);

    foreach ($row as $v1){
        foreach ($v1 as $v2){
            
                             }
                          }

}
else{
        header ("refresh:0.1;url=index.php");
}

?>
<h3><a href="index.php">Acceuil</a></h3>
<h1>Bienvenue sur la page Admin</h1>
<div class="admin">
    <table>
  <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">login</th>
        <th scope="col">prenom</th>
        <th scope="col">nom</th>
        <th scope="col">mdp</th>
    </tr>
  </thead>
  <tbody>
    <?php
        require('db.php');

        $query1=mysqli_query($conn,"SELECT * FROM utilisateurs");
        while($row=mysqli_fetch_array($query1))
        {


        

    ?>
    <tr>
         <td><?php echo $row['id'];  ?></td>
         <td><?php echo $row['login'];  ?></td>
         <td><?php echo $row['prenom']; ?></td>
         <td><?php echo $row['nom'];?>  </td>
         <td><?php echo $row['password'];?> </td>

     </tr>
<?php } ?>
  </tbody>
        
</table>
</div>



</body>


</html>