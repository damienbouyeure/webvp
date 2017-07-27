

<!DOCTYPE html>
<html>
<head>
	<title>installation</title>
</head>
<body>
<?php

// cette page est a lancer en premier,si la base de donnée n'est pas crée ou si le site viens d'etre copier sur un serveur

if (isset($_POST['submit'])) {
$host=$_POST['host'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$login=$_POST['login'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$passadmin=$_POST['passadmin'];
$passadmin=md5($passadmin);



$monfichier= fopen('host.txt', 'a+');
fgets($monfichier);
fseek($monfichier, 0);
fputs($monfichier, $host);
fputs($monfichier, "\r\n");
fputs($monfichier, $user);
fputs($monfichier, "\r\n");
fputs($monfichier, $pass);
fputs($monfichier, "\r\n");
fputs($monfichier, $login);
fputs($monfichier, "\r\n");
fputs($monfichier, $nom);
fputs($monfichier, "\r\n");
fputs($monfichier, $prenom);
fputs($monfichier, "\r\n");
fputs($monfichier, $passadmin);

fclose('host.txt');
header('location: webvp.php');
//header('location: connnection.php');

}
else
{
$monfichier= fopen('host.txt', 'a+');
fgets($monfichier);
ftruncate($monfichier, 0);




}



?>

<h1>Connexion a la base de données</h1><br>
<form method="POST" action="install.php">
	
 Hostname: <input type="text" name="host"> <br>
 Username: <input type="text" name="user"><br>
 Password: <input type="password" name="pass"><br>
<br>
<h1> Compte Admin</h1>
 Login: <input type="text" name="login"> <br>
 Nom: <input type="text" name="nom"><br>
 Prenom: <input type="text" name="prenom"><br>
 Mot de passe: <input type="password" name="passadmin"><br>

<input type="submit" name="submit" value="Accepter"><br>



</form>

</body>
</html>