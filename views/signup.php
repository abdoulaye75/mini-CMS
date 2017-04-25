<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> S'inscrire </title>
	<link rel="stylesheet" type="text/css" href="../CSS/signup.css">
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
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.php"> S'inscrire </a></li>
            <li><a href="signin.php"> se connecter </a></li>
          </ul>
        </div>
      </div>
    </nav>

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
			<form action="articles.php" method="post">
				<button type="submit"> S'inscrire </button>
			</form>
		</form>
	</div>

	<script src="../jquery-2.2.4.js"></script>
	<script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
