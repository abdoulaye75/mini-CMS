<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>gateau au chocolat</title>
    <link rel="stylesheet" type="text/css" href="../CSS/gateau.css">
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

    <p>Pour faire un gateau il faut !</p>
    <p>farine, oeufs, lait, sel, sucre vanillé, sucre en poudre</p>
    <img src="../img/cake_chocolate.jpeg" alt="gâteau au chocolat">

  	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
