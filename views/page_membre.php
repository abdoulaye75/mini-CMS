<?php

include '../database/database.php';
session_start();
$user = $bdd->query("SELECT * FROM users");
$delete_user = $user->fetch();

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
            <li><a href="recettes.php"> Fiches recette </a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php if ((isset($_SESSION['name'])) && (isset($_SESSION['password']))) { ?>
            <li> <?php echo '<a href="signout.php"> Se déconnecter </a>'; ?>
            </li>
            <li> <?php echo '<a href="unsubscribe.php?id='.$delete_user['id'].'"> Supprimer mon compte </a>'; ?> </li>
			        <?php }else { ?>
	    		  <li> <?php echo "<a href='signup.php'> S'inscrire </a>"; ?> </li>
	          <li> <?php echo "<a href='signin.php'> se connecter </a>"; ?> </li>
			         <?php }?>
    	
    		</li>
          </ul>
        </div>
      </div>
    </nav>

    <?php

	    if ((isset($_SESSION['name'])) && (isset($_SESSION['password']))) {
			echo '<div class="alert alert-success alert-dismissable"> <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong> Connexion réussie, '.$_SESSION['name'].' ! </strong></div>';
		}
    ?>

    <ul>
    	<li> <a href="articles.php"> Consulter les articles des recettes </a> </li>
    	<li> <a href="create.php"> Créer un article de recette </a> </li>
    </ul>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>