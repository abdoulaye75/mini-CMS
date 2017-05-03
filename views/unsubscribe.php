<?php

include '../database/database.php';
session_start();

if (isset($_GET['id'])) {
	if (isset($_POST['submit'])) {
		$deleteUser = $bdd->prepare("DELETE FROM users WHERE id = :id");
		$deleteUser->execute(array('id' => $_GET['id']));
    $_SESSION = array();
    session_destroy();
		header("Location: http://localhost/mini-CMS/index.php");
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Supprimer mon compte </title>
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
            <li> <?php if ((isset($_SESSION['name'])) && (isset($_SESSION['password']))) {
				            echo '<a href="signout.php"> Se déconnecter </a>'; ?>
            </li>
            <li> <?php echo '<a href="unsubscribe.php"> Supprimer mon compte </a>'; ?> </li>
			        <?php   }else { ?>
	    		  <li> <?php echo "<a href='signup.php'> S'inscrire </a>"; ?> </li>
	          <li> <?php echo "<a href='signin.php'> se connecter </a>"; ?> </li>
			         <?php }?>
    	
    		</li>
          </ul>
        </div>
      </div>
    </nav>

    <h1 class="text-center"> Etes-vous sûr de vouloir supprimer votre compte ? Cette opération est irréversible </h1>

    <form action="" method="post">
    	<button type="submit" name="submit"> Supprimer mon compte </button>
    </form>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>