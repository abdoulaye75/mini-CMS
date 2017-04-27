<?php
	// $bdd = new PDO('mysql:host=localhost;dbname=mini-cms;charset=utf8','root','carton');
	$name = htmlspecialchars($_POST['name']);
	$ingredients = htmlspecialchars($_POST['ingredients']);
	$time = htmlspecialchars($_POST['time']);
	$submit = $_POST['submit'];
	if((isset($name)) && (isset($ingredients)) && (isset($time)) && (isset($submit))) {
		$req = $bdd->prepare("UPDATE recettes SET name = :nvname , ingredients = :nvingredients, preparation_time = :nvpreparation_time WHERE id = :id");
		$req->execute(array('nvname' => $nvname, 'nvingredients' => $nvingredients, 'nvpreparation_time' => $nvpreparation_time));
		echo" Les modification de vos recettes ce sont modifiées avec succés .";
	}
	$modification = $bdd->prepare('SELECT * recettes');
	$modification->execute(array('id' => $_GET['id']));
 ?>
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
