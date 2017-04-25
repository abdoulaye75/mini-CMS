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
			<li> <a href="create.php"> Ajouter une recette </a> </li>
			<li> <a href="update.php"> Modifier une recette </a> </li>
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
			</tr>
		</thead>

		<tbody>
			<?php
      
      		while ($donnees = $reponse->fetch()) { ?>
			<tr>
				<td> <?php echo '<a href="recette.php?name='.$donnees['name'].'">'.$donnees['name'].'</a>'; ?> </td>
				<td> <?php echo $donnees['ingredients']; ?> </td>
				<td> <?php echo $donnees['preparation_time']; ?> </td>
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