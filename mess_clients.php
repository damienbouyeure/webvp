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

if(!isset($_SESSION['id_clients']))
{
header('location: webvp.php');

}
require "header.php"; ?>


<!-- bandeau-->
         
         <div class="container">
       <div class="row" align="center">
<img src="bandeau_accueil.png">
    </div></div>

<!-- message-->
<div class="container">
  <div class="row">
    <?php
    $id_clients=$_SESSION["id_clients"];
  $req_mess_clients="SELECT * FROM commentaire as comm INNER JOIN clients as cli ON comm.id_clients=cli.id_clients where comm.id_clients=$id_clients ";
  $res_mess_clients=mysqli_query($bdd,$req_mess_clients);
  

  $row_mess_clients=mysqli_fetch_assoc($res_mess_clients);  
  if($row_mess_clients){
  ?>
                      <h3>Message<br></h3>   
                </div> <!-- /widget-header -->
                
                <div class="widget-content">
                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sujet</th><th>Message</th><th>Admin</th><th>Repondre</th>
                            </tr>
                        </thead>
                        <tbody>
                            
<?php
    while ($row_mess_clients) {
?>

  

  

    <?php
        echo "<tr ><td>".$row_mess_clients["sujet_comm"]."</td><td>".$row_mess_clients["texte_commentaire"]."</td><td>";
        
        if(!isset($row_mess_clients['id_admin'])){echo 'aucun';}
else {
$id_admin=$row_mess_clients['id_admin'];
$reqadmin="SELECT * from admin WHERE id_admin=$id_admin";
$resadmin=mysqli_query($bdd,$reqadmin);
$rowadmin=mysqli_fetch_assoc($resadmin);


 echo $rowadmin["login_admin"];}

echo   "</td><td><a href='message.php' class='btn btn-success btn-info'><span class='glyphicon glyphicon-envelope'></span> Repondre </a></td></tr>";
        $row_mess_clients=mysqli_fetch_assoc($res_mess_clients);
    }
    ?>


                            </tbody>
                        </table>
                    
                </div> <!-- /widget-content -->
            
            </div> <!-- /widget -->
            </div>
                    

    </div>     
 </div> 
 <?php   
  }
  else{
  if(!isset($row_mess_clients))
  { ?>
    <a href="message.php" class="btn btn-success btn-block"><span class="glyphicon glyphicon-envelope"></span> Nouveau Message</a> 
<?php
  }
}
    ?>




  </div>

</div>



























<!-- footer-->
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