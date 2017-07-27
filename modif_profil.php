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



<?php require "header.php"; ?>


<!--       Logo et Bandeau du site      -->
         
         <div class="container">
       <div class="row" align="center">
<img src="bandeau_accueil.png">
    </div></div>


<!--       Profile      -->
  <div class="container">
<div class="row">


<form class="form-horizontal" action="modif.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Profile de 
<?php
$id_clients=$_SESSION['id_clients'];
$req_clients="SELECT * FROM clients where id_clients=$id_clients";
$res_clients=mysqli_query($bdd,$req_clients);
$row_clients=mysqli_fetch_assoc($res_clients);



echo $row_clients['login_clients'];

?>

</legend>

<!-- Text input-->
<div class="form-group" >
  <label class="col-md-4 control-label" for="login">Login</label>  
  <div class="col-md-4">
  <input id="login" name="login" type="text" placeholder="" class="form-control input-xs" value="
<?php
echo $row_clients['login_clients'];
?>
  " >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Nom</label>  
  <div class="col-md-4">
  <input id="nom" name="nom" type="text" placeholder="" class="form-control input-xs" value="
<?php
echo $row_clients['nom_clients'];
?>
  " >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="prenom">Prenom</label>  
  <div class="col-md-4">
  <input id="prenom" name="prenom" type="text" placeholder="" class="form-control input-xs" value="
<?php
echo $row_clients['prenom_clients'];
?>
  " >
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="mail">E-Mail</label>  
  <div class="col-md-4">
  <input id="mail" name="mail" type="text" placeholder="" class="form-control input-xs" value="
<?php
echo $row_clients['mail_clients'];
?>
  " >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="tel">Telephone</label>  
  <div class="col-md-4">
  <input id="tel" name="tel" type="text" placeholder="" class="form-control input-xs" value="
<?php
echo $row_clients['tel_clients'];
?>
  " >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="adresse">Adresse</label>  
  <div class="col-md-4">
  <textarea id="adresse" name="adresse" placeholder="" class="form-control input-xs" ><?php
echo $row_clients['adresse_clients'];
?> </textarea>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="CP">Code Postal</label>  
  <div class="col-md-4">
  <input id="CP" name="cp" type="text" placeholder="" class="form-control input-xs" value="
<?php
echo $row_clients['cp_clients'];
?>
  " >
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="ville">Ville</label>  
  <div class="col-md-4">
  <input id="ville" name="ville" type="text" placeholder="" class="form-control input-xs" value="
<?php
echo $row_clients['ville_clients'];
?>
  " >
    
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
  <input type="submit" name="valider" value="valider" class="btn btn-block btn-primary">
    </div>
</div>


</fieldset>
</form>















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