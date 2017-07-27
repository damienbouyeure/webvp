 <?php require "connnection.php"; ?>
<?php

$id_clients=$_GET['id_clients'];
$req_bannir_clients="DELETE FROM clients where id_clients=$id_clients"; //permet de retirer le clients de la base de donnée
$req_bannir_prodV="DELETE FROM produit_vente where id_clients=$id_clients"; // retire les produits mise en vente par le clients
mysqli_query($bdd, $req_bannir_clients);
mysqli_query($bdd, $req_bannir_prodV);
header('location:clients.php')
?>