<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Se connecter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/accueil.css">
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
		<h1 class="text-center"> Se connecter </h1>
		<form action="articles.php" method="post">
			<div class="form-group">
				<label for="username"> Identifiant : </label>
				<input type="text" name="username" required id="username" class="form-control">
			</div>

			<div class="form-group">
				<label for="password"> Mot de passe : </label>
				<input type="password" name="password" required id="password" class="form-control">
			</div>
			<button type="submit"> Se connecter </button>
		</form>
	</div>

</body>
</html>