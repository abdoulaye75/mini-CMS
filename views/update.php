<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Modifier une recette </title>
</head>
<body>

	<nav>
		<ul>
			<li> <a href="../index.php"> Retour à l'accueil </a> </li>
			<li> <a href="articles.php"> Liste des articles </a> </li>
		</ul>
	</nav>

	<form action="" method="post">
		<label for="name"> Nom de la recette : </label> <input type="text" name="name" id="name"> <br>
		<label for="ingredients"> Ingrédients : </label> <input type="text" name="ingredients" id="ingredients"> <br>
		<label for="time"> Temps de préparation (en minutes) : </label> <input type="text" name="time" id="time"> <br>
		<button type="submit"> Ajouter cette nouvelle recette </button>
	</form>

</body>
</html>