<?php
require "connnection.php";

// permet de supprimer un article du pannier
	$id_panier=$_SESSION['id_panier'];
     $id_prodV=$_GET['id_prodV'];

	$req_prod="SELECT * FROM `produit_vente` INNER JOIN panier as panier ON produit_vente.id_panier = panier.id_panier where produit_vente.id_panier=$id_panier and produit_vente.id_prodV=$id_prodV";
	echo $req_prod;

	$res_prod=mysqli_query($bdd,$req_prod);
	$ligne_prod=mysqli_fetch_assoc($res_prod);
	$prix_prodV=$ligne_prod['prix_prodV'];
	$total_prix_panier=$ligne_prod['total_prix_panier']-$prix_prodV;
	$Nombre_prod_panier=$ligne_prod['Nombre_prod_panier']-1;
	$req_modif_panier="UPDATE panier set total_prix_panier=$total_prix_panier, Nombre_prod_panier=$Nombre_prod_panier where id_panier=$id_panier";
	mysqli_query($bdd,$req_modif_panier);
	$req_delet_panier="update produit_vente set id_panier=null where id_prodV=$id_prodV";
	mysqli_query($bdd,$req_delet_panier);
header('location:panier.php ');


?>