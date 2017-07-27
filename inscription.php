

 <?php require "connnection.php"; ?>


<?php




$Login=$_POST['login_clients'];
$Nom=$_POST['nom_clients'];
$Prenom=$_POST['prenom_clients'];
$email=$_POST['mail_clients'];
$password=$_POST['pass_clients'];
$password=md5($password);
$telephone=$_POST['tel_clients'];
$adresse=$_POST['adresse_clients'];
$cp=$_POST['cp_clients'];
$ville=$_POST['ville_clients'];


$reqadmin="SELECT * FROM admin where login_admin='$Login'";

$resadmin=mysqli_query($bdd,$reqadmin);
$row_admin=mysqli_fetch_assoc($resadmin);
echo $reqadmin;
echo $row_admin;

if(!isset($row_admin))
{
$req ="INSERT INTO clients(login_clients, nom_clients, prenom_clients, mail_clients, pass_clients, tel_clients, adresse_clients, cp_clients, ville_clients) VALUES('$Login', '$Nom', '$Prenom', '$email', '$password', '$telephone', '$adresse', '$cp','$ville')";

mysqli_query($bdd,$req);

header ('location: WebVP.php');
}
else
{
	header ('location:Login.php');


}

?>

