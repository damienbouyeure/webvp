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
elseif ($_SESSION['id_admin']!=$_GET['id_admin']) {
	header("location: WebVP.php");
}

require "header.php"; ?>




    <div class="row">
<div class="container">


</div></div>