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

if(isset($_GET['commande_valid'])){ ?>
         <div class="container">
       <div class="row" align="center">
    <h1 align='center'>VOTRE COMMANDE EST VALIDE  </h1>
        </div></div>
<?php
}
else {}
?>



         
         <div class="container">
       <div class="row" align="center">
<img src="bandeau_accueil.png" class="img-responsive">
    </div></div>
  





    <div class="row">
<div class="container">
<?php
$req_prod_all="SELECT * from produit_vente as prod INNER join categories as cat ON cat.id_cat =prod.id_cat INNER JOIN clients as cli ON cli.id_clients=prod.id_clients WHERE valid_prodV=1 and vendu_prodV IS NULL ORDER BY prod.id_prodV DESC" ;
$res_prod_all=mysqli_query($bdd,$req_prod_all);
$cmp_prod_all=0;
$row_prod_all=mysqli_fetch_assoc($res_prod_all);
if (isset($row_prod_all)) {

// carroussel des 3 dernier produit en vente et validé par l'admin


?>

    <div class="row">
        <div class="span12">
            <div class="well"> 
                <div id="myCarousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                  

<?php
while($row_prod_all && $cmp_prod_all<3){






$imgprod=$row_prod_all["image"];
                 

 echo     '                <div class="item';
if($cmp_prod_all>0){}
else{    echo " active";}


echo '"><div class="row-fluid"><h1 align="center"><b>'.$row_prod_all['nom_prodV'].'</b></h1></div><div class="row-fluid"><div class="span4"><a href="produit.php?id_prodV='.$row_prod_all['id_prodV'].'" class="thumbnail"><img src="./prodimg/'.$imgprod.'" widht="250" height="250" /></a>';
echo '<div class="row-fluid"><div class="col-sm-6"><p><b>Description: </b>'.$row_prod_all["description_prodV"].'</div ><div class="col-sm-4"></div><div class="col-sm-2"><b>Prix: </b>'.$row_prod_all['prix_prodV'].' €</div></p></div>';

echo '</div></div></div>';

   $cmp_prod_all++;
 $row_prod_all=mysqli_fetch_assoc($res_prod_all);}
 ?>     

                 
                </div><!--/carousel-inner-->
                 
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                </div><!--/myCarousel-->
                 
            </div><!--/well-->   
        </div>
    </div>


                    

    </div>     
    
 



<?php }

else {} ?>























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