 <?php require "connnection.php"; ?>      
    
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" 
lang="fr">
<head>
            <link href="css/bootstrap.css" rel="stylesheet"> 
            <link rel="stylesheet" type="text/css" href="css/login.css">
  <script src="./js/jquery-3.1.1.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
    <meta http-equiv="Content_Type" content="text/html; charset=UTF-8" />
    <title>WebVP</title>
        
        
        
</head>
<body>
<?php require "header.php"; ?>






















 <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Inscription</a>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <!-- Cette partie contient le formulaire permettant de ce connecter au site,soit en clients,soit en admin -->


                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="log.php" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <input type="text" name="login" id="login" tabindex="1" class="form-control" placeholder="Login" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pwd" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Se connecter">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="mdpoublie.php" tabindex="5" class="forgot-password">Mot de passe oublié?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                                <!-- Formulaire d'inscription clients -->


                                <form id="register-form" action="inscription.php" method="post" role="form" style="display: none;">
                                    <div class="form-group">
                                        <input type="text" name="login_clients" id="Login" tabindex="1" class="form-control" placeholder="Login" value="">
                                    </div>
                                     <div class="form-group">
                                        <input type="text" name="nom_clients" id="nom" tabindex="1" class="form-control" placeholder="Nom" value="">
                                    </div>
                                     <div class="form-group">
                                        <input type="text" name="prenom_clients" id="Prenom" tabindex="1" class="form-control" placeholder="Prenom" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="mail_clients" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass_clients" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm_pass_clients" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                    </div>
                                      <div class="form-group">
                                        <input type="text" name="tel_clients" id="telephone" tabindex="1" class="form-control" placeholder="Telephone" value="" maxlength="10">
                                    </div>
                                      <div class="form-group">
                                        <input type="text" name="adresse_clients" id="adresse" tabindex="1" class="form-control" placeholder="Adresse" value="">
                                    </div>
                                      <div class="form-group">
                                        <input type="text" name="cp_clients" id="cp" tabindex="1" class="form-control" placeholder="Code postal" value="" maxlength="5">
                                    </div>
                                     <div class="form-group">
                                        <input type="text" name="ville_clients" id="ville" tabindex="1" class="form-control" placeholder="Ville" value="">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Inscription">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





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