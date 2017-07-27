<?php
//recupere les infos dans le fichier txt (les informations de connection a la base de données et pour creer un compte admin)

$monfichier= fopen('host.txt', 'r+');
$host= trim(fgets($monfichier));
$user= trim(fgets($monfichier));
$pass= trim(fgets($monfichier));
$login= trim(fgets($monfichier));
$nom= trim(fgets($monfichier));
$prenom= trim(fgets($monfichier));
$passadmin= trim(fgets($monfichier));
fclose($monfichier);

// Creer la base de données
$babased='babased';
$bdd=mysqli_connect( $host, $user,$pass);
$reqcreate='CREATE DATABASE babased';
mysqli_query($bdd,$reqcreate);
$bdd= mysqli_connect( $host, $user, $pass, 'babased');

// importe le fichier SQL de la base de donnée

$reqsql=file_get_contents('babased.sql');

mysqli_multi_query($bdd,$reqsql);

// verifie qu'il y aucun compte admin de creer pour en creer un

$bdd= mysqli_connect( $host, $user, $pass, $babased);
$req_verif_admin="SELECT * FROM admin";
$res_verif_admin=mysqli_query($bdd,$req_verif_admin);
$row_verif=mysqli_fetch_assoc($res_verif_admin);
if(!isset($row_verif))
{

	// creatuon du compte admin
$bdd= mysqli_connect( $host, $user, $pass, $babased);
$req_create_admin="INSERT INTO admin (login_admin, nom_admin, prenom_admin, pass_admin) VALUES ('$login', '$nom', '$prenom', '$passadmin')";
mysqli_query($bdd, $req_create_admin); 
}
else{
session_start();

$bdd = mysqli_connect( $host, $user, $pass, 'babased');
}



?>