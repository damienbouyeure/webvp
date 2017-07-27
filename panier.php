  <?php require "connnection.php"; ?>  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" 
lang="fr">
<head>
            <link href="css/bootstrap.css" rel="stylesheet"> 
            <link href="css/carou_prod.css" rel="stylesheet"> 
  <script src="./js/jquery-3.1.1.min.js"></script>
  <script src="./js/bootstrap.js"></script>
<script type="text/javascript" src="js/carou_prod.js"></script>
	<meta http-equiv="Content_Type" content="text/html; charset=UTF-8" />
	<title>La Caverne d'Ali-Baba</title>
        
        
        
</head>
<body>
<?php require "header.php"; 

//page de panier, a l'ajout d'un produit on tombe sur cette page





?>



         
         <div class="container">
       <div class="row" align="center">
<img src="bandeau_accueil.png">
    </div></div>
  

            <?php

     $id_panier=$_SESSION['id_panier'];
     $req_comm="SELECT id_panier FROM commande where id_panier=$id_panier";
     $res_comm=mysqli_query($bdd,$req_comm);
     $row_comm=mysqli_fetch_assoc($res_comm);
     if(!isset($row_comm))
     { ?>


<div class="container">
	<div class="row">
	<div class="col-xs-2">
	</div>
		<div class="col-xs-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Mon panier</h5>
							</div>
							<div class="col-xs-6">
								<a type="button" class="btn btn-danger btn-sm btn-block" href="WebVP.php">
									<span class="glyphicon glyphicon-share-alt"></span> Continuer mes achats
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					
					<div class="row">
						        <div>
            <h1>liste des produits</h1>


            <?php


     if(isset($_GET['id_prodV']))
     {
     $id_prodV=$_GET['id_prodV'];
	$req_ajout_panier="update produit_vente set id_panier=$id_panier where id_prodV=$id_prodV";
	mysqli_query($bdd,$req_ajout_panier);


	$req_prod="SELECT * FROM `produit_vente` INNER JOIN panier as panier ON produit_vente.id_panier = panier.id_panier where produit_vente.id_panier=$id_panier and produit_vente.id_prodV=$id_prodV";
	$res_prod=mysqli_query($bdd,$req_prod);
	$ligne_prod=mysqli_fetch_assoc($res_prod);

	$req_panier="SELECT SUM(prix_prodV) FROM produit_vente where id_panier=$id_panier";
	$res_panier=mysqli_query($bdd,$req_panier);
	$row_panier=mysqli_fetch_assoc($res_panier);
	if ($row_panier['SUM(prix_prodV)']!=$ligne_prod['total_prix_panier']) {

	$prix_prodV=$ligne_prod['prix_prodV'];
	$total_prix_panier=$ligne_prod['total_prix_panier']+$prix_prodV;
	$Nombre_prod_panier=$ligne_prod['Nombre_prod_panier']+1;




	$req_modif_panier="UPDATE panier set total_prix_panier=$total_prix_panier, Nombre_prod_panier=$Nombre_prod_panier where id_panier=$id_panier";
	mysqli_query($bdd,$req_modif_panier);
	}	}


	$req="SELECT * FROM `produit_vente` INNER JOIN panier as panier ON produit_vente.id_panier = panier.id_panier where produit_vente.id_panier=$id_panier ";
	$res=mysqli_query($bdd,$req);
	$ligne=mysqli_fetch_assoc($res);
	while ($ligne) {
  
?>
      				
					<div class="row">
						<div class="col-xs-1"></div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong><?php echo $ligne["nom_prodV"]; ?></strong></h4><h4><small><?php echo $ligne["description_prodV"]; ?></small></h4>
						</div>
												<div class="col-xs-1"></div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong><?php echo $ligne["prix_prodV"]; ?><span class="text-muted">€</span></strong></h6>
							</div>

							<div class="col-xs-2">
								<a type="button" class="btn btn-link btn-xs" href="delete_panier.php?id_prodV=<?php echo $ligne['id_prodV']; ?>">
									<span class="glyphicon glyphicon-trash"> </span>
								</a>
							</div>
						</div>
						</div>
					<?php

$ligne=mysqli_fetch_assoc($res);         	

}  ?>

	</div>
        </div>
					</div>
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-9">

							</div>
							<div class="col-xs-3">
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Prix du panier: <strong>  
         <?php
         $req="SELECT * FROM panier WHERE id_panier=$id_panier";
         $res=mysqli_query($bdd, $req);
         $ligne=mysqli_fetch_assoc($res);

        echo $ligne["total_prix_panier"];
        ?> € </strong></h4>
						</div>
						<div class="col-xs-3">
							<a type="button" class="btn btn-success btn-block" href="livraison.php">
								Choix de livraison
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }  
else {
?>  

         <div class="container">
       <div class="row" align="center">
       <legend>VOUS N'AVEZ PAS DE PANIER!!!!</legend>
    </div></div>
<?php }  ?>

<div class="container">
    <div class="row ">
    <nav class="navbar navbar-inverse ">
    <div class="container-fluid">
    <div class="col-sm-4">
            <h4 class="text-primary" ><u>A propos</u></h4>
            <ul class="nav">
        <li><a href="#"><small>A propos de nous</small></a></li>
        <li><a href="#"><small>Nous recrutons</small></a></li>
        <li><a href="#"><small>Support</small></a></li>
        <li><a href="#"><small>Magasin</small></a></li>
        </ul> 
 </div>


<div class="col-sm-4">
<h4> &nbsp&nbsp&nbsp</h4>
        <ul class="nav">
        <li><a href="#"><small>Expedition</small></a></li>
        <li><a href="#"><small>Paiement</small></a></li>
        <li><a href="#"><small>Carte cadeau</small></a></li>
        <li><a href="#"><small>Aide</small></a></li>
        </ul>
    </div> 

    
    <div class="col-sm-4 text-primary">
                 <h4><u>Magasin</u></h4>
        <p><i><small> La Caverne d'Ali-Baba</small></i></p>
        <p><i><small> 0139950134</small></i></p>
        <p><i><small> direction@alibaba.com</small></i></p>
    </div></div></nav>
</div>
</div>
    

</body>
     
</html>     