<?php
require "connnection.php";

// permet d'ecrire dans la base de donnée la commande effectué

$id_panier=$_SESSION['id_panier'];
$id_livraison=$_SESSION['id_livraison'];
$id_clients=$_SESSION['id_clients'];
$prix_total=$_SESSION['prix_total'];


$req_commande="INSERT INTO commande (prix_total_commande, id_clients, id_livraison, id_panier) VALUES ($prix_total, $id_clients, $id_livraison, $id_panier)";
mysqli_query($bdd,$req_commande);
$req_upd_prod="UPDATE produit_vente SET vendu_prodV=1 WHERE id_panier=$id_panier";
mysqli_query($bdd,$req_upd_prod);
							$req_create_panier="INSERT INTO panier (Nombre_prod_panier, total_prix_panier) VALUES ('0','0')";
							mysqli_query($bdd,$req_create_panier);
							
							$_SESSION['id_panier']=mysqli_insert_id($bdd);




header('location:webvp.php?commande_valid=1');




















?>