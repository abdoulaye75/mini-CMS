<?php

include '../database/database.php';
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title> Votre page membre </title>
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="../index.php"> Accueil</a></li>            
            <li><a href="articles.php"> Liste des articles </a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li> <?php if ((isset($_SESSION['name'])) && (isset($_SESSION['password']))) {
				echo '<a href="signout.php"> Se déconnecter </a>';
			}else {
	    		echo "<a href='signup.php'> S'inscrire </a>";
	            echo "<a href='signin.php'> se connecter </a>";
			}?>
    	
    		</li>
          </ul>
        </div>
      </div>
    </nav>

    <?php

	    if ((isset($_SESSION['name'])) && (isset($_SESSION['password']))) {
			echo "<h1 class='text-center'> Bienvenue dans votre espace personnel, ".$_SESSION['name']. "! </h1>";
		}
    ?>

    <ul>
    	<li> <a href="articles.php"> Consulter les articles des recettes </a> </li>
    	<li> <a href="create.php"> Créer un article de recette </a> </li>
    	<li> <a href="update.php"> Modifier un article de recette </a> </li>
    </ul>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>