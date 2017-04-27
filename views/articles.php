<?php

include '../database/database.php';
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Les articles </title>
	<link rel="stylesheet" type="text/css" href="../CSS/articles.css">
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

    <?php

  		include '../database/database.php';

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
			<?php
      
      		while ($donnees = $reponse->fetch()) { ?>
			<tr>
				<td> <?php echo '<a href="">'.$donnees['name'].'</a>'; ?> </td>
				<td> <?php echo $donnees['ingredients']; ?> </td>
				<td> <?php echo $donnees['preparation_time']; ?> </td>
				<td> <?php $modifiedrecipes = array($donnees);
			        foreach ($modifiedrecipes as $modifiedrecipe) {
			          echo '<a href="update.php?id='.$donnees['id'].'"> Modifier la recette </a>';
			        } ?>
		        </td>
		        <td> <?php $recipes = array($donnees);
		        foreach ($recipes as $recipe) {
		        	echo '<a href="delete.php?id='.$donnees['id'].'"> Supprimer la recette </a>';
		        }
		        ?> </td>
			</tr>
			<?php 
    		} $reponse->closeCursor();
     			?>
		</tbody>
	</table>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>