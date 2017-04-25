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

	<table class="table table-bordered table-striped table-responsive">
		<thead>
			<tr>
				<th> Nom du plat </th>
				<th> Ingrédients </th>
				<th> Temps de préparation (en minutes) </th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td> <a href="recette1.php"> Gâteau </a></td>
				<td>oeufs, farine</td>
				<td>50</td>
			</tr>

			<tr>
				<td> <a href="recette2.php"> Madeleine </a> </td>
				<td>oeufs</td>
				<td>30</td>
			</tr>
		</tbody>
	</table>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>