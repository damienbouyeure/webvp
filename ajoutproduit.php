 <?php require "connnection.php"; ?>    
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" 
lang="fr">
<head>
            <link href="css/bootstrap.css" rel="stylesheet"> 
  <script src="./js/jquery-3.1.1.min.js"></script>
  <script src="./js/bootstrap.min.js"></script> 

	<meta http-equiv="Content_Type" content="text/html; charset=UTF-8" />
	<title>La Caverne d'Ali-Baba</title>
        
        
        
</head>
<body>
<?php 

date_default_timezone_set('Europe/Paris');



if (isset($_POST["accepter"])) {
$path=pathinfo($_FILES["image"]['name']);

$imgext=$path["extension"];
$imgname=$path['filename'];
$image= ''.date('d-m-Y_G-i').'-'.$imgname.'.'.$imgext;
$nom_prodV=$_POST["nom_prodV"];
$description_prodV=$_POST["description_prodV"];
$prix_prodV=$_POST["prix_prodV"];
$id_clients=$_POST["id_clients"];
$id_cat=$_POST["id_cat"];





$dossier="./prodimg/".$image;

move_uploaded_file($_FILES['image']['tmp_name'], $dossier );
$reqprod= "INSERT INTO produit_vente (nom_prodV, description_prodV, prix_prodV, image, id_clients, id_cat) VALUES ('$nom_prodV','$description_prodV',$prix_prodV,'$image',$id_clients,$id_cat)";
    mysqli_query($bdd,$reqprod);
 
header("location:WebVP.php");
}


require "header.php"; ?>




    <div class="row">
&nbsp&nbsp&nbsp
    </div>
         
         <div class="container">
       <div class="row">
<form class="form-horizontal" action="ajoutproduit.php" method="POST" enctype="multipart/form-data">
<fieldset>

<!-- titre -->
<legend>Vendre un produit</legend>

<!-- Nom Produit-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nom Produit">Nom du produit</label>  
  <div class="col-md-4">
  <input id="Nom Produit" name="nom_prodV" type="text" placeholder="Nom du produit" class="form-control input-md" >
    
  </div>
</div>

<!-- description -->

<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description_prodV" placeholder="Description"></textarea>
  </div>
</div>

<!-- Prix-->

<div class="form-group">
  <label class="col-md-4 control-label" for="Nom Produit">Prix</label>  
  <div class="col-md-4">
  <div class="input-group">
  <input id="Nom Produit" name="prix_prodV" type="text" placeholder="Prix" class="form-control input-md" >
     <span class="input-group-addon">€</span>
  </div></div>
</div>

<!-- Categories -->

<div class="form-group">
  <label class="col-md-4 control-label" for="Categorie">Categorie</label>
  <div class="col-md-4">
    <select id="Categorie" name="id_cat" class="form-control">


<?php               
$req_cat = "select * from categories order by nom_cat";
$res_cat = mysqli_query($bdd, $req_cat);
$row_cat = mysqli_fetch_assoc($res_cat);
while ($row_cat) {

     echo " <option value='".$row_cat["id_cat"]."'>".$row_cat["nom_cat"]."</option>" ;
     ?>



 <?php     
     $row_cat = mysqli_fetch_assoc($res_cat);
}
?>


    </select>
  </div>
</div>

<!-- champs Caché = Id du client --> 

<input type="hidden" name="id_clients" value="
<?php
echo $_SESSION['id_clients'];
?>
">  
<!-- ajout Image --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="Image">Image</label>
  <div class="col-md-4">
    <input id="Image" name="image" class="input-file" type="file">
  </div>
</div>

<!-- accepter // Annuler -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <input type="submit" id="accepter" name="accepter" class="btn btn-success" value="Accepter">
    <a id="" name="" class="btn btn-danger" href="WebVP.php">Annuler</a>
  </div>
</div>

</fieldset>
</form>

    </div></div>
    <div class="row">
&nbsp&nbsp&nbsp
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