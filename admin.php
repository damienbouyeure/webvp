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

    $req_admin="SELECT *FROM admin Order by login_admin";


    $res_admin=mysqli_query($bdd,$req_admin);
    $ligne_admin=mysqli_fetch_assoc($res_admin);



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
                                <th>Login</th><th>Nom</th><th>Prenom</th><th>modifier</th>


                            </tr>
                        </thead>
                        <tbody>
                            
<?php
    while ($ligne_admin) {
?>

  

  

    <?php
        echo "<tr ><td>".$ligne_admin["login_admin"]."</td><td>".$ligne_admin["nom_admin"]."</td><td>".$ligne_admin["prenom_admin"]."</td>";
        if($ligne_admin['id_admin']==$_SESSION["id_admin"])
        {
                echo "<td><a href='modif_admin.php?id_admin=".$ligne_admin['id_admin']. "' class='btn btn-primary btn-info'><span class='glyphicon glyphicon-remove'></span> Modifier</a></td>";


        }
        echo "</tr>";

        $ligne_admin=mysqli_fetch_assoc($res_admin); 
    }
    ?>


                            </tbody>
                        </table>
                        <div class='row'>
                                                    <a href="ajout_admin.php" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-plus"></span> Ajouter un Admin</a> 
                             </div>
                </div> 
            
            </div> 
            </div>
                    

    </div>     
 </div>    

<div class="row">
&nbsp

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