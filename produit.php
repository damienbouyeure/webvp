 <?php require "connnection.php"; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" 
lang="fr">
<head>
            <link href="css/bootstrap.css" rel="stylesheet"> 
            <link href="css/carou_prod.css" rel="stylesheet"> 
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
   $id_prodV=$_GET['id_prodV'];
$req_prod_select="SELECT * from produit_vente as prod INNER join categories as cat ON cat.id_cat =prod.id_cat INNER JOIN clients as cli ON cli.id_clients=prod.id_clients WHERE id_prodV=$id_prodV" ;
$res_prod_select=mysqli_query($bdd,$req_prod_select);
$cmp_prod_select=0;
$row_prod_select=mysqli_fetch_assoc($res_prod_select);





$imgprod=$row_prod_select["image"]; ?>  

<div class="container">
    <div class="row" >

        <div class="col-md-12">
           
                            <div class="thumbnail" >
<?php 
echo                    '<h4 class="text-center"><span class="label label-info">'.$row_prod_select["nom_prodV"].'</span></h4>
                    <img src="./prodimg/'.$imgprod.'" class="img-responsive">'; ?>
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">

                                <h3>Description</h3>
                            
                            </div>

                            <div class="col-md-6 col-xs-6 price " align="right">
<?php                        
echo                                   ' <h3>'.$row_prod_select['prix_prodV'].'€

                                <label></label></h3>';?>
                           
                            </div>
                        </div>
<?php                        
echo                        '<p>'.$row_prod_select['description_prodV'].'</p>';?>
                        <div class="row">
<?php 
if (isset($_SESSION['login']) && $row_prod_select['vendu_prodV']!=1)  {
?>                        
                            <div class="col-md-6">
 <?php }   ?>                    
 
<a href="profile.php?id_clients=
<?php
echo $row_prod_select['id_clients'];
 ?>"

 <?php
 echo            'class="btn btn-primary ';
if (!isset($_SESSION['login']) && $row_prod_select['vendu_prodV']!=1)  {
  echo 'btn-block';  
}
else {
  echo 'btn-product';  
}


echo                    '"><span class="glyphicon glyphicon-thumbs-up"></span> ' .$row_prod_select['login_clients'].'</a>'; ?> 
                            </div>

<?php 
if (isset($_SESSION['login'])  && $row_prod_select['vendu_prodV']!=1)  {
?>
 


                            <div class="col-md-6">
                                <a href="panier.php?id_prodV=
<?php echo $id_prodV; ?>
                              " class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Acheter</a></div><?php  } ?> 
                        </div>

                        <p> </p>
                    </div>
               </div>
                        
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