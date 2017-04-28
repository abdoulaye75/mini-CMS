<?php

include 'database/database.php';
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crêpe</title>
    <link rel="stylesheet" type="text/css" href="../CSS/crepe.css">
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
            <li> <a href="../index.php"> Retour à l'accueil </a> </li>
            <li> <?php if ((isset($_SESSION['name'])) && (isset($_SESSION['password']))) {
				echo '<a href="create.php"> Ajouter une recette </a>'; ?>
			</li>
			<li> <?php echo '<a href="update.php"> Modifier une recette </a>'; ?> </li>
			<li> <?php echo '<a href="signout.php"> Se déconnecter </a>'; ?> </li>
			<?php }

			else { ?>
	    	<li> <?php echo "<a href='signup.php'> S'inscrire </a>"; ?> </li>
	        <li> <?php echo "<a href='signin.php'> se connecter </a>"; ?> </li>

			<?php }?>    	
    		<li> <a href="recettes.php"> Fiches recette </a> </li>
          </ul>
        </div>
      </div>
    </nav>

    
    <p>Les ingrédients pour préparer une crêpe sont !</p>
    <p>La farine , les oeufs, le lait, et du sucre vanillé</p>
    <img src="../img/crepe.jpeg" alt="crêpe">

  	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
