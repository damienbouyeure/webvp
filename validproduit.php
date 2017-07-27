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
<?php 

if (!isset($_SESSION["id_admin"])) {
   header ('location: WebVP.php');
}

require "header.php"; ?>  



         
         <div class="container">
       <div class="row" align="center">
<img src="bandeau_accueil.png">
    </div></div>
  





    <div class="row">
<div class="container">
<?php
$req_prod_all="SELECT * from produit_vente as prod INNER join categories as cat ON cat.id_cat =prod.id_cat INNER JOIN clients as cli ON cli.id_clients=prod.id_clients WHERE prod.valid_prodV is null ORDER BY prod.id_prodV DESC" ;
$res_prod_all=mysqli_query($bdd,$req_prod_all);
$cmp_prod_all=0;
$row_prod_all=mysqli_fetch_assoc($res_prod_all);



?>
<div class="span7">   
<div class="widget stacked widget-table action-table">
                    
                <div class="widget-header">
                    <i class="icon-th-list"></i>
                    <h3>Valider produit</h3>
                </div> <!-- /widget-header -->
                
                <div class="widget-content">
                    
                    <table class="table table-striped table-bordered">
                        <thead >
                            <tr bgcolor="#880015" >
                                <th ><font color="#ffffff">Produit</font></th>
                                <th ><font color="#ffffff">Description</font></th>
                                <th ><font color="#ffffff">categorie</font></th>
                                <th ><font color="#ffffff">Prix</font></th>
                                <th ><font color="#ffffff">Vendu par</font></th>
                                <th class="td-actions"><font color="#ffffff">Validation</font></th>
                            </tr>
                        </thead>
                        <tbody>
                            
<?php
while($row_prod_all ){



echo                            '<tr align="center"><td>'.$row_prod_all['nom_prodV'].'</td>';
echo                            '<td>'.$row_prod_all['description_prodV'].'</td>';
echo                            '<td>'.$row_prod_all['nom_cat'].'</td>';
echo                            '<td>'.$row_prod_all['prix_prodV'].'</td>';
echo                            '<td>'.$row_prod_all['login_clients'].'</td>';
?>
                                <td class="td-actions" align='center'>
  <?php 
 echo                                 '<a href="valid.php?valid_prodV=1&id_prodV='.$row_prod_all['id_prodV'].'" class="btn btn btn-primary" >';
?>
                                        <span class="glyphicon glyphicon-ok"></span>
                                        <i class="btn-icon-only icon-ok"></i>                                       
                                    </a>
  <?php 
echo                         '<a href="valid.php?valid_prodV=0&id_prodV='.$row_prod_all['id_prodV'].'"  class="btn btn btn-danger" >';
                                    ?>
                                     <span class="glyphicon glyphicon-remove"></span>
                                        <i class="btn-icon-only icon-remove"></i>                                       
                                    </a>
                                </td>
                            </tr>
                            <?php 
$row_prod_all=mysqli_fetch_assoc($res_prod_all);
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