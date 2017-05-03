<?php

session_start();

include '../database/database.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Ajouter une recette </title>
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
      <li> <?php echo '<a href="unsubscribe.php"> Supprimer mon compte </a>'; ?> </li>
      <?php }

      else { ?>
        <li> <?php echo "<a href='signup.php'> S'inscrire </a>"; ?> </li>
          <li> <?php echo "<a href='signin.php'> se connecter </a>"; ?> </li>

      <?php }?>
          <li> <a href="recettes.php"> Fiches recette </a> </li>
        <li> <a href="articles.php"> Liste des articles </a> </li>
          </ul>
        </div>
      </div>
    </nav>

<?php
		$recette = $bdd->query("SELECT * FROM recettes");

		$name = htmlspecialchars($_POST['name']);
		$ingredients = htmlspecialchars($_POST['ingredients']);
		$time = htmlspecialchars($_POST['time']);
		$submit = $_POST['submit'];

		if (isset($name) && isset($ingredients) && isset($time) && isset($submit)) {
		$req = $bdd->prepare("INSERT INTO recettes (name, ingredients, preparation_time) VALUES (?, ?, ?)");

		$req->execute(array($name, $ingredients, $time));

		echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;
			</button>La recette a été ajoutée avec succès</div>';
	}

  ?>
	<form action="" method="post" class="col-md-6">
    <div class="form-group">
  		<label for="name"> Nom de la recette : </label>
      <input type="text" name="name" id="name" class="form-control" ng-model="name">
    </div>

		<div class="form-group">
      <label for="ingredients"> Ingrédients : </label>
      <input required type="text" name="ingredients" id="ingredients" class="form-control" ng-model="ingredients">
    </div>

		<div class="form-group">
      <label for="time"> Temps de préparation : </label>
      <input required type="duration" name="time" id="time" class="form-control" placeholder="ex: 01:00:00 pour 1 heure" ng-model="time">
    </div>

		<button type="submit" name="submit"> Ajouter cette nouvelle recette </button>
	</form>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</html>
