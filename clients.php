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


if (!isset($_SESSION["id_admin"])) {
   header ('location: WebVP.php');
}


require "header.php"; ?>




    <div class="row">
<div class="container">
<?php

    $req_clients="SELECT *FROM clients Order by login_clients";


    $res_clients=mysqli_query($bdd,$req_clients);
    $ligne_clients=mysqli_fetch_assoc($res_clients);
// Cette page permet d'afficher la liste des clients, seul les admins peuvent avoir acces a cette page


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
                                <th>Login</th><th>Nom</th><th>Prenom</th><th>E-Mail</th><th>Telephone</th><th>Voir Profil</th><th>Bannir
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
<?php
    while ($ligne_clients) {
?>

  

  

    <?php
        echo "<tr ><td>".$ligne_clients["login_clients"]."</td><td>".$ligne_clients["nom_clients"]."</td><td>".$ligne_clients["prenom_clients"]."</td><td>".$ligne_clients["mail_clients"]."</td><td>".$ligne_clients["tel_clients"]."</td>";

echo   "<td><a href='profile.php?id_clients=".$ligne_clients['id_clients']. "' class='btn btn-primary btn-info'><span class='glyphicon glyphicon-book'></span> Profil</a></td><td><a href='bannir.php?id_clients=".$ligne_clients['id_clients']. "' class='btn btn-primary btn-danger'><span class='glyphicon glyphicon-remove'></span> Bannir</a></td></tr>";
        $ligne_clients=mysqli_fetch_assoc($res_clients); 
    }
    ?>


                            </tbody>
                        </table>
                    
                </div> <!-- /widget-content -->
            
            </div> <!-- /widget -->
            </div>
                    

    </div>     
 </div>    








<!--       FOOTER       -->

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