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
&nbsp&nbsp&nbsp
    </div>
         
         <div class="container">
       <div class="row">
<form class="form-horizontal" action="ajoutadmin.php" method="POST" enctype="multipart/form-data">
<fieldset>

<!-- titre -->
<legend>Ajout d'admin</legend>

<!-- login -->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Login</label>  
  <div class="col-md-4">
  <div class="input-group">
  <input id="login admin" name="login_admin" type="text" placeholder="Login" class="form-control input-md" >
    </div>
  </div>
</div>

<!-- Nom -->
<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Nom</label>
  <div class="col-md-4">                     
   <div class="input-group">
  <input id="nom admin" name="nom_admin" type="text" placeholder="Nom" class="form-control input-md" >
  </div></div>
</div>
<!-- Prenom-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prenom">Prenom</label>  
  <div class="col-md-4">
  <div class="input-group">
  <input id="prenom admin" name="prenom_admin" type="text" placeholder="Prenom" class="form-control input-md" >
  </div></div>
</div>

<!-- Mot de passe -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Mot de passe">Mot de passe</label>  
  <div class="col-md-4">
  <div class="input-group">
  <input id="pass admin" name="pass_admin" type="text" placeholder="password" class="form-control input-md" >
  </div></div>
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