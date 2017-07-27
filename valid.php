 <?php require "connnection.php"; ?>  

<?php 
// permet de valider ou non un produit dans la base de donnée 
$id_prodV=$_GET['id_prodV'];
$valid_prodV=$_GET['valid_prodV'];
$id_admin=$_SESSION['id_admin'];

$req_valid_prod="UPDATE produit_vente SET valid_prodV='$valid_prodV', id_admin='$id_admin' where id_prodV=$id_prodV " ;
mysqli_query($bdd,$req_valid_prod);
header ('location: WebVP.php');
?>