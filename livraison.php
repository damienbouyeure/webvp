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
<?php 
// cette page permet de choisir le choix du mode de livraison


require "header.php"; ?>






<div class="container">
	<div class="row">
	<div class="col-xs-2">
	</div>
		<div class="col-xs-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">






<legend>Livraison</legend>
							</div>
						</div>
					</div>
				</div>
				<form class="form-horizontal" method="POST" action="commande.php">
<!-- Choix livraison -->

<div class="form-group">

  <label class="col-md-4 control-label" for="selectbasic">Livraison</label>
  <div class="col-md-4">
<?php
	$req_livr="select * from livraison";
	$res_livr=mysqli_query($bdd,$req_livr);
	$row_livr=mysqli_fetch_assoc($res_livr);
?>

    <select id="nom_livraison" name="nom_livraison" class="form-control">
<?php while ($row_livr) { ?>
	
<option><?php echo $row_livr['nom_livraison']; ?></option>

<?php
	$row_livr=mysqli_fetch_assoc($res_livr);
}

?>
    </select>
  </div>
</div>

<!-- Accepter//annuler -->
<div class="form-group">
<div class="col-sm-5"></div>
  <div class="col-md-6">
    <input type="submit" id="accepter" name="accepter" class="btn btn-success" value="Accepter">
    <a id="button2id" name="button2id" class="btn btn-danger" href="panier.php">annuler</a>
  </div>
</div>

</fieldset>
</form>














					</div>
				</div>
			</div>
		</div>
	</div>
</div>









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