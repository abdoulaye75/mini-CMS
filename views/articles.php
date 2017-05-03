<?php

include '../database/database.php';
session_start();
$user = $bdd->query("SELECT * FROM users");
$delete_user = $user->fetch();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Les articles </title>
	<link rel="stylesheet" type="text/css" href="../CSS/articles.css">
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
			<li> <?php echo '<a href="signout.php"> Se déconnecter </a>'; ?> </li>
            <li> <?php echo '<a href="unsubscribe.php?id='.$delete_user['id'].'"> Supprimer mon compte </a>'; ?> </li>
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

  		include '../database/database.php';

  		$reponse = $bdd->query('SELECT * FROM recettes');

 	?>

	<table class="table table-bordered table-striped table-responsive">
		<thead>
			<tr>
				<th> Nom du plat </th>
				<th> Ingrédients </th>
				<th> Temps de préparation (en minutes) </th>
				<?php if ((isset($_SESSION['name'])) && (isset($_SESSION['password']))) { ?>
					<th> Modifier un article </th>
					<th> Supprimer un article </th>
				<?php } ?>
			</tr>
		</thead>

		<tbody>
			<?php
      
      		while ($donnees = $reponse->fetch()) { ?>
			<tr>
				<td> <?php echo '<a href="">'.$donnees['name'].'</a>'; ?> </td>
				<td> <?php echo $donnees['ingredients']; ?> </td>
				<td> <?php echo $donnees['preparation_time']; ?> </td>
				<?php if ((isset($_SESSION['name'])) && (isset($_SESSION['password']))) { ?>
				<td> <?php $modifiedrecipes = array($donnees);
			        foreach ($modifiedrecipes as $modifiedrecipe) {
			          echo '<a href="update.php?id='.$donnees['id'].'"> <i class="material-icons">edit</i> Modifier la recette </a>';
			        } ?>
		        </td>
		        <td> <?php $recipes = array($donnees);
		        foreach ($recipes as $recipe) {
		        	echo '<a href="delete.php?id='.$donnees['id'].'" style="color:red;"> <i class="material-icons">delete</i> Supprimer la recette </a>';
		        }
		        ?> </td>
		        <?php } ?>
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