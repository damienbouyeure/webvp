<?php 
// bandeau d'entete du site, importer sur chaque page

if(isset($_GET["deco"]))
{
    $req="DELETE FROM panier WHERE Nombre_prod_panier<1 and total_prix_panier<1";
    mysqli_query($bdd,$req);
    session_destroy ();
    header ('location: WebVP.php');
}
else {}

?>
    <div class="container">
    <header class="row">

    <nav class="navbar navbar-inverse">
    <div class="container-fluid ">
           <div class="navbar-header">
      <a class="navbar-brand" href="WebVP.php">La Caverne d'Ali-Baba</a>
        </div>
        <ul class="nav navbar-nav">

                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorie <span class="caret"></span></a>

        <ul class="dropdown-menu">
            
<?php               
$req_cat = "select * from categories order by nom_cat";
$res_cat = mysqli_query($bdd, $req_cat);
$row_cat = mysqli_fetch_assoc($res_cat);
while ($row_cat) {

     echo "<li><a href='list_prod_cat.php?id_cat=".$row_cat['id_cat']."'>".$row_cat["nom_cat"];
     ?>
     </a></li>


 <?php     
     $row_cat = mysqli_fetch_assoc($res_cat);
}
?>
            

        </ul>
        </li>
        <li><a href="list_prod.php"><span class="glyphicon glyphicon-barcode"> Produit</span></a></li>
        </ul>
<form class="navbar-form navbar-left form-group" action="list_prod_search.php" method="get">
  <div class="input-group col">
    <input type="text" class="form-control" placeholder="Rechercher" name="search">
    <div class="input-group-btn">
      <button class="btn btn-default btn-search" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
<?php 
if (isset($_SESSION['login']))  {
?>
 


 <li class="dropdown">
        
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
<?php 
$login=$_SESSION['login'];
echo $login;
?>

        <span class="caret"></span></a>

        <ul class="dropdown-menu">
            <li><a href="profile.php?id_clients=
<?php
echo $_SESSION['id_clients'];
?>
            ">Mon compte </a></li>
            <li><a href="panier.php">Mon panier </a></li>
            <li><a href="mess_clients.php">Message </a></li>
            <li><a href="list_prod_mesventes?id_clients=
<?php 
    echo $_SESSION['id_clients'];
?>
            ">Mes ventes</a></li>
            <li><a href="webvp.php?deco=1">deconnexion</a></li>

        </ul>
        </li>
        </ul>
          <ul class="nav navbar-nav navbar-right">
      <li><a href="ajoutproduit.php"><span class="glyphicon glyphicon-plus"></span>Vendre un produit</a></li>
</ul>

<?php }

if (isset($_SESSION['admin']))  {
?>
 


 <li class="dropdown">
        
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
<?php 
$login=$_SESSION['admin'];
echo $login;
?>

        <span class="caret"></span></a>

        <ul class="dropdown-menu">
            <li><a href="clients.php">Clients</a></li>
            <li><a href="admin.php">Admin</a></li>      
            <li><a href="mess_admin.php">Message</a></li>
            <li><a href="ajout_cat.php">categories</a></li>
            <li><a href="webvp.php?deco=1">deconnexion</a></li>

        </ul>
        </li>
        </ul>
          <ul class="nav navbar-nav navbar-right">
      <li><a href="validproduit.php"><span class="glyphicon glyphicon-plus"></span>valider un produit</a></li>
</ul>

<?php }

else if (!isset($_SESSION['login'])&& !isset($_SESSION['admin']))  {
 ?>
           <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>Login</a></li>
</ul>

<?php }

?>

  </div>
    </div> 


         
 
        </nav>
        </div>
    </header>  