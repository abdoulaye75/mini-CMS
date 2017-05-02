<?php

function getArticles() {
	require 'database/database.php';
	$articles = $bdd->query('SELECT * from recettes');

	return $articles;
}

function signUp() {
	session_start();
	require 'database/database.php';

	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	$newuser = $bdd->prepare("INSERT INTO users (name, password) VALUES (:name, :password)");

	if ((isset($username)) && (isset($password)) && (isset($_POST['subscribe']))) {
		$_SESSION['name'] = $username;
		$_SESSION['password'] = $password;

		$newuser->execute(array('name' => $username, 'password' => $password));

		header("Location: views/page_membre.php");
	}
}

function logIn() {
	require 'database/database.php';

	 $Username = htmlspecialchars($_POST['Username']);
	 $Password = htmlspecialchars($_POST['Password']);
	 $submit = $_POST['button'];

   if ((isset($Username)) && (isset($Password)) && (isset($submit))){
        // Si l'utilisateur remplit le formulaire et le valide
        
     $_SESSION['name'] = $Username;
     $_SESSION['password'] = $Password;
     $req->execute(array('name' => $Username,'password' => $Password));

     $connecteduser = $req->fetch();
    //si les identifiants de l'utilisateur ne figurent pas dans la base de données, on empêche la connexion et on le propose de s'inscrire
    if (!$connecteduser) {
      echo "Utilisateur inconnu ! Vérifiez bien votre identifiant et votre mot de passe !";
      echo '<a href="signup.php"> S\'inscrire </a>';
    }
    else { // sinon, la session peut démarrer et l'utilisateur peut accéder à sa page membre personnelle
      session_start();
      $_SESSION['name'] = $connecteduser['name'];
      $_SESSION['password'] = $connecteduser['password'];
      header("Location: views/page_membre.php");
    }
  }
}

function logOut() {
	session_start();

	$_SESSION = array();

	session_destroy();

	header("Location: views/index2.php"); // on redirige l'utilisateur vers la page d'accueil
}

function createArticle() {
	session_start();

	require 'database/database.php';

	$recette = $bdd->query("SELECT * FROM recettes");

	$name = htmlspecialchars($_POST['name']);
	$ingredients = htmlspecialchars($_POST['ingredients']);
	$time = htmlspecialchars($_POST['time']);
	$submit = $_POST['submit'];

	if (isset($name) && isset($ingredients) && isset($time) && isset($submit)) {
		$req = $bdd->prepare("INSERT INTO recettes (name, ingredients, preparation_time) VALUES (?, ?, ?)");

		$req->execute(array($name, $ingredients, $time));

		echo "La recette a été ajoutée avec succès";
	}
}

function updateArticle() {
	session_start();

	require "database/database.php";

	$name = htmlspecialchars($_POST['name']);
	$ingredients = htmlspecialchars($_POST['ingredients']);
	$time = htmlspecialchars($_POST['time']);

	if (isset($_GET['id'])) {

		if((isset($name)) && (isset($ingredients)) && (isset($time)) && (isset($_POST['submit']))) {
			$req = $bdd->prepare("UPDATE recettes SET name = :nvname , ingredients = :nvingredients, preparation_time = :nvpreparation_time WHERE id = :id");

			$nvname = htmlspecialchars($_POST['name']);
			$nvingredients = htmlspecialchars($_POST['ingredients']);
			$nvpreparation_time = htmlspecialchars($_POST['time']);
			$submit = $_POST['submit'];

			$req->execute(array('nvname' => $nvname, 'nvingredients' => $nvingredients, 'nvpreparation_time' => $nvpreparation_time,
			 'id' => $_GET['id']));
			echo "Votre recette a été modifiée avec succès .";
		}
	}
	$modification = $bdd->prepare("SELECT * recettes");
	$modification->execute(array('id' => $_GET['id']));
}

function deleteArticle() {
	session_start();
	require '../database/database.php';

	if (isset($_GET['id'])) {
		$delete = $bdd->prepare("DELETE FROM recettes WHERE id = :id");
		$delete->execute(array('id' => $_GET['id']));
		echo "La recette a bien été supprimé";
	}

	header("Location: views/articles.php");
}