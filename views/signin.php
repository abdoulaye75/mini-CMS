<?php
include '../database/database.php';
	$req = $bdd->prepare("SELECT name, password FROM users WHERE name = :name AND password = :password");
	 $login = htmlspecialchars($_POST['Username']);
	 $mdp = htmlspecialchars($_POST['Password']);
	 $submit = htmlspecialchars($_POST['button']);
<<<<<<< HEAD
	 // Si l'utilisateur remplit le formulaire et le valide
	 if ((isset($login)) && (isset($mdp)) && (isset($submit))){
	 $_SESSION['name'] = $login;
	 $_SESSION['password'] = $mdp;
	 $req->execute(array('name' => $login,'password' => $mdp));

	 $connecteduser = $req->fetch();
}
	//si les identifiants de l'utilisateur ne figurent pas dans la base de données, on empêche la connexion et on le propose de s'inscrire
if (!$connecteduser) {
	echo "Utilisateur inconnu ! Vérifiez bien votre identifiant et votre mot de passe !";
	echo '<a href="signup.php"> S\'inscrire </a>';
}
else { // sinon, la session peut démarrer et l'utilisateur peut accéder à sa page membre personnelle
	session_start();
	$_SESSION['name'] = $connecteduser['name'];
	$_SESSION['mdp'] = $connecteduser['mdp'];
	header("Location: http://localhost/mini-CMS/views/page_membre.php");
}
 ?>
=======
?>

>>>>>>> 845824cadb162f7c982236cf14ce05c3ed7d1415
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

    <div class="mesonglet">
      <h2>Connexion </h2>
      <div class="form-group">
        <input class="form-control" class="D"  placeholder="Username" type="text" name="Usernamne" value=""><br>
      </div>
      <div class="form-group">
        <input class="form-control"  placeholder="Password" type="password" name="Password" value="">
      </div>
      <button type="button" name="button">Connexion</button><br>
      <a href="signup.php">Inscription ?</a>
      <a href="#">Mot de passe oublié ?</a>

      <?php if ((isset($login)) && (isset($mdp)) && (isset($submit))){
        // Si l'utilisateur remplit le formulaire et le valide
        
           $_SESSION['name'] = $login;
           $_SESSION['password'] = $mdp;
           $req->execute(array('name' => $login,'password' => $mdp));

           $connecteduser = $req->fetch();
          //si les identifiants de l'utilisateur ne figurent pas dans la base de données, on empêche la connexion et on le propose de s'inscrire
          if (!$connecteduser) {
            echo "Utilisateur inconnu ! Vérifiez bien votre identifiant et votre mot de passe !";
            echo '<a href="signup.php"> S\'inscrire </a>';
          }
          else { // sinon, la session peut démarrer et l'utilisateur peut accéder à sa page membre personnelle
            session_start();
            $_SESSION['name'] = $connecteduser['name'];
            $_SESSION['mdp'] = $connecteduser['mdp'];
            header("Location: http://localhost/mini-CMS/views/page_membre.php");
          }
        }
    ?>
    </div>

</body>
</html>
