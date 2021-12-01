<?php
session_start();
require 'db.php';
//Si l'utilisateur n'est pas connecté en tant que "Admin" il sera redirectinner vers la page d'acceuil
if($_SESSION['login'] === 'admin'){
echo "<center>"."<h1>"."Admin Page"."</h1>"."</center>";
$select = "SELECT * FROM utilisateurs";
$sql = mysqli_query($conn,$select);
$row = mysqli_fetch_all($sql, MYSQLI_ASSOC);

    foreach ($row as $v1){
        foreach ($v1 as $v2){
            echo "<div class = listuser>"."• "."$v2"."<br>"."</div>";
                             }
                          }

}
else{
        header ("refresh:0.1;url=index.php");
}