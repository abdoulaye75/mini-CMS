<?php

include 'database/database.php';
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Fiches recette </title>
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
</head>
<body><nav class="navbar navbar-inverse">
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

    <ul>
    	<li> <a href="crepe.php"> Fiche crêpe </a> </li>
    	<li> <a href="gateau.php"> Gâteau au chocolat </a> </li>
    	<li> <a href="madeleine.php"> Madeleine </a> </li>
    	<li> <a href="pommesdeterre.php"> Purée de pommes de terre </a> </li>
    	<li> <a href="potaufeu.php"> Pot au feu </a> </li>
    </ul>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>