<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> S'inscrire </title>
	<link rel="stylesheet" type="text/css" href="../CSS/signup.css">
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="conteneur">
		<h1 class="text-center"> S'inscrire </h1>
		<form action="articles.php" method="post">
			<div class="form-group">
				<label for="username"> Identifiant : </label>
				<input type="text" name="username" required id="username" class="form-control">
			</div>

			<div class="form-group">
				<label for="password"> Mot de passe : </label>
				<input type="password" name="password" required id="password" class="form-control">
			</div>
			<button type="submit"> S'inscrire </button>
		</form>
	</div>

</body>
</html>