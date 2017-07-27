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
require "header.php";

if (!isset($_SESSION["id_admin"])) {
   header ('location: WebVP.php');
}

if(isset($_POST["accepter"]))
{
$nom_cat=$_POST['nom_cat']; 
$reqcat= "INSERT INTO categories (nom_cat) VALUES ('$nom_cat')";
    mysqli_query($bdd,$reqcat);
 
header("location:WebVP.php");
}
elseif(isset($_POST["Supprimer"]))
{
$nom_cat=$_POST['nom_cat']; 
$reqcat= "DELETE FROM categories WHERE nom_cat='$nom_cat' ";
    mysqli_query($bdd,$reqcat);
 echo $reqcat;

header("location:WebVP.php");
}  ?>





    <div class="row">
&nbsp&nbsp&nbsp
    </div>
         
         <div class="container">
       <div class="row">
<form class="form-horizontal" action="ajout_cat.php" method="POST" enctype="multipart/form-data">
<fieldset>

<!-- titre -->
<legend>Ajout de categorie</legend>

<!-- Nom categorie-->
<div class="form-group">
  <label class="col-md-4 control-label" for="categorie">Nom du categorie</label>  
  <div class="col-md-4">
  <input id="Nom cat" name="nom_cat" type="text" placeholder="Nom de la categorie" class="form-control input-md" >
    
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
         <div class="container">
       <div class="row">
<form class="form-horizontal" action="ajout_cat.php" method="post" enctype="multipart/form-data">
<fieldset>

<!-- titre -->
<legend>Supprimer une categorie</legend>

<!-- choix suppression cat-->



<div class="form-group">
  <label class="col-md-4 control-label" for="id_cat">Supprimer categories</label>
  <div class="col-md-4">
    <select id="nom_cat" name="nom_cat" class="form-control">
 <?php               
$req_cat = "select * from categories order by nom_cat";
$res_cat = mysqli_query($bdd, $req_cat);
$row_cat = mysqli_fetch_assoc($res_cat);
while ($row_cat) {
 echo     "<option>".$row_cat['nom_cat']."</option>";

$row_cat = mysqli_fetch_assoc($res_cat);


} ?>
    </select>
  </div>
</div>


<!-- accepter // Annuler -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <input type="submit" id="Supprimer" name="Supprimer" class="btn btn-success" value="Supprimer">
    <a id="" name="" class="btn btn-danger" href="WebVP.php">Annuler</a>
  </div>
</div>

</fieldset>
</form>
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