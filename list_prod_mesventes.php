 <?php require "connnection.php"; ?>    
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" 
lang="fr">
<head>
            <link href="css/bootstrap.css" rel="stylesheet"> 
            <link href="css/valid_prod.css" rel="stylesheet"> 
  <script src="./js/jquery-3.1.1.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/carou_prod.js"></script>
	<meta http-equiv="Content_Type" content="text/html; charset=UTF-8" />
	<title>La Caverne d'Ali-Baba</title>
        
        
        
</head>
<body>
<?php require "header.php"; ?>



         
         <div class="container">
       <div class="row" align="center">
<img src="bandeau_accueil.png">
    </div></div>
  





    <div class="row">
<div class="container">
<?php
$id_clients=$_GET['id_clients'];
if($id_clients!=$_SESSION['id_clients'])
{
    header ('location: WebVP.php');
}    
        $req_prod="SELECT *FROM produit_vente INNER JOIN categories on categories.id_cat=produit_vente.id_cat where produit_vente.id_clients=$id_clients ";

    $res_prod=mysqli_query($bdd,$req_prod);
    $ligne_prod=mysqli_fetch_assoc($res_prod);



?>
<div class="span7">   
<div class="widget stacked widget-table action-table">
                    
                <div class="widget-header">
                    <i class="icon-th-list"></i>
                    <h3>tout les produit<br></h3>   
                </div> <!-- /widget-header -->
                
                <div class="widget-content">
                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Image</th><th>Nom</th><th>Catégories</th><th>Description</th><th>Prix</th><th>date</th>



                                <th>Validé</th>

                                <th>Voir Produit    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
<?php
    while ($ligne_prod) {
?>

  

  

    <?php
        echo "<tr ><td><img src='./prodimg/".$ligne_prod["image"]."' height='50px' ></td><td>".$ligne_prod["nom_prodV"]."</td><td>".$ligne_prod["nom_cat"]."</td><td>".$ligne_prod["description_prodV"]."</td><td>".$ligne_prod["prix_prodV"]." €</td><td>".$ligne_prod["date_prodV"]."</td>";

if(!isset($ligne_prod['valid_prodV'])){ $valid_prodV="en cours";}
elseif ($ligne_prod['valid_prodV']==1) { $valid_prodV="validé";}
elseif ($ligne_prod['valid_prodV']==0) { $valid_prodV="refusé";}


echo        "<td>".$valid_prodV."</td> ";

echo   "<td><a href='produit.php?id_prodV=".$ligne_prod['id_prodV']. "' class='btn btn-primary btn-info'><span class='glyphicon glyphicon-book'></span> Afficher</a></td></tr>";
        $ligne_prod=mysqli_fetch_assoc($res_prod); 
    }
    ?>


                            </tbody>
                        </table>
                    
                </div> <!-- /widget-content -->
            
            </div> <!-- /widget -->
            </div>
                    

    </div>     
 </div>      
     <div class="row">
<div class="container">
&nbsp
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