 <?php require "connnection.php"; ?>
<?php

 






	// on teste si nos variables sont définies
	if (isset($_POST['login']) && isset($_POST['pwd'])) {

		$login = $_POST['login'];
		$pwd = $_POST ['pwd'];
		$pwd = md5($pwd);
	
		$req = 'SELECT * FROM clients WHERE login_clients = \''.$login.'\' and pass_clients = \''.$pwd.'\'' ;
		$reqadmin='SELECT * FROM admin WHERE login_admin = \''.$login.'\' and pass_admin = \''.$pwd.'\'';


		$resultat = mysqli_query($bdd, $req);
		$donnees = mysqli_fetch_assoc($resultat);
		$verifpwd=$donnees['pass_clients'];

		//partie login clients

				if (($login==$donnees['login_clients'])&& ($pwd==$verifpwd))
						{
							$_SESSION['login'] = $_POST['login'];
							$_SESSION['pwd'] = $_POST['pwd'];
							$_SESSION['id_clients']=$donnees['id_clients'];
							
							// vreation d'un panier dans la base de donnée
							$req_create_panier="INSERT INTO panier (Nombre_prod_panier, total_prix_panier) VALUES ('0','0')";
							mysqli_query($bdd,$req_create_panier);
							
							$_SESSION['id_panier']=mysqli_insert_id($bdd);

					// on redirige notre visiteur vers une page de notre section membre
						header ('location: WebVP.php');
						}
				else
				{
					// partie login admin
							$resultat = mysqli_query($bdd, $reqadmin);
							$donnees = mysqli_fetch_assoc($resultat);
							$verifpwd=$donnees['pass_admin'];
							echo $verifpwd;
							if (($login==$donnees['login_admin'])&& ($pwd==$verifpwd))
							{
							$_SESSION['admin'] = $login;
							$_SESSION['pwd'] = $pwd;
							$_SESSION['id_admin']=$donnees['id_admin'];
							header ('location: WebVP.php');
							}
							else
							{
								// si mot de pass ou login faux, on retourne a la page de login
								header ("location: login.php");


							}
				}
			}
	
?>