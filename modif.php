 <?php require "connnection.php"; ?>  
<?php

$Login=$_POST['login'];
$Nom=$_POST['nom'];
$Prenom=$_POST['prenom'];
$email=$_POST['mail'];
$telephone=$_POST['tel'];
$adresse=$_POST['adresse'];
$cp=$_POST['cp'];
$ville=$_POST['ville'];
$id_clients=$_SESSION['id_clients'];
$req="UPDATE clients SET login_clients='$Login', nom_clients='$Nom', prenom_clients='$Prenom', mail_clients='$email', tel_clients='$telephone', adresse_clients='$adresse', cp_clients='$cp', ville_clients='$ville' WHERE id_clients=$id_clients";
mysqli_query($bdd, $req);
echo $req;
header('location:profile.php?id_clients='.$id_clients);

?>