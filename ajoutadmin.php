 <?php require "connnection.php"; ?>
<?php


$Login=$_POST['login_admin'];
$Nom=$_POST['nom_admin'];
$Prenom=$_POST['prenom_admin'];
$password=$_POST['pass_admin'];
$password=md5($password);



$req ="INSERT INTO admin(login_admin, nom_admin, prenom_admin, pass_admin) VALUES('$Login', '$Nom', '$Prenom', '$password')";

mysqli_query($bdd,$req);

header ('location: admin.php');


?>