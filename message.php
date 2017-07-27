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

if(isset($_POST["Envoyer"]))
{
$id_clients=$_SESSION['id_clients'];

$sujet_comm=$_POST["sujet"];
$texte_comm=$_POST['message'];

$req_mess="INSERT INTO commentaire (sujet_comm, texte_commentaire, id_clients) VALUES ('$sujet_comm', '$texte_comm', '$id_clients')";
echo $req_mess;
mysqli_query($bdd,$req_mess);
header('location: mess_clients.php');
}

elseif(!isset($_SESSION['id_clients']))
{
header('location: webvp.php');

}
require "header.php"; ?>


<!-- bandeau-->
         
         <div class="container">
       <div class="row" align="center">
<img src="bandeau_accueil.png">
    </div></div>



<div class="container">
<div class="row">
<form class="form-horizontal" method="POST" action="message.php">
<fieldset>

<!-- Titre -->
<legend>Message</legend>

<!-- Sujet-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Sujet:</label>  
  <div class="col-md-4">
  <input id="" name="sujet" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Message -->
<div class="form-group">
  <label class="col-md-4 control-label" for="message">Message:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="message" name="message"></textarea>
  </div>
</div>

<!-- bouton envoyer -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <input type="submit" name="Envoyer" class="btn btn-success" value="Envoyer">
  </div>
</div>

</fieldset>
</form>
</div></div>























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