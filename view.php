<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Accueil </title>
    <link rel="stylesheet" type="text/css" href="CSS/accueil.css">
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap/css/bootstrap.min.css">
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
            <li> <a href="index2.php"> Accueil </a> </li>
            <li> <?php if ((isset($_SESSION['name'])) && (isset($_SESSION['password']))) {
				echo '<a href="views/create.php"> Ajouter une recette </a>'; ?>
			</li>
			<li> <?php echo '<a href="views/update.php"> Modifier une recette </a>'; ?> </li>
			<li> <?php echo '<a href="views/signout.php"> Se déconnecter </a>'; ?> </li>
			<?php }

			else { ?>
	    	<li> <?php echo "<a href='views/signup.php'> S'inscrire </a>"; ?> </li>
	        <li> <?php echo "<a href='views/signin.php'> Se connecter </a>"; ?> </li>

			<?php }?>    	
    		<li> <a href="views/recettes.php"> Fiches recette </a> </li>
    		<li> <a href="views/articles.php"> Liste des articles </a> </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php

  		include 'database/database.php';

  		$reponse = $bdd->query('SELECT * FROM recettes');

 	?>

	<table class="table table-bordered table-striped table-responsive">
		<thead>
			<tr>
				<th> Nom du plat </th>
				<th> Ingrédients </th>
				<th> Temps de préparation (en minutes) </th>
				<th> Modifier un article </th>
				<th> Supprimer un article </th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($articles as $article): ?>
			<tr>
				<td> <?php echo $article['name'] ?> </td>
				<td> <?php echo $article['ingredients'] ?> </td>
				<td> <?php echo $article['preparation_time'] ?> </td>
				<td> <?php echo '<a href="views/update.php?id='.$article['id'].'"> Modifier la recette </a>'; ?> </td>
		        <td> <?php echo '<a href="views/delete.php?id='.$article['id'].'"> Supprimer la recette </a>'; ?> </td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>

	<script src="jquery-2.2.4.js"></script>
	<script src="CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>