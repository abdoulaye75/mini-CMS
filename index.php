<?php
  // $bdd = new PDO('mysql:host=localhost;dbname=mini-cms;charset=utf8','root','');
  $bdd = new PDO("mysql:host=localhost;dbname=mini-cms;charset=ut8","phpmyadmin","");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/accueil.css">
  </head>
  <body>
 <?php
      $reponse = $bdd->query('SELECT * FROM mini-cms');
      while ($donnee = $reponse->fetch()) {
      echo"";
      }
     ?>
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
            <li><a href="index.php"> Accueil</a></li>            
            <li><a href="views/articles.php"> Liste des articles </a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="views/signup.php"> S'inscrire </a></li>
            <li><a href="views/signin.php"> se connecter </a></li>
          </ul>
        </div>
      </div>
    </nav>

    <h1> Recettes de cuisine </h1>
    <p> Vous pouvez consulter la liste des articles, en ajouter et en modifiant si vous êtes inscrit ou connecté. </p>

    <img src="img/cake.jpeg" alt="gâteau au chocolat">

    <div class="mesonglet">
      <h2>Connexion </h2>
      <div class="form-group">
        <input class="form-control" class="D" placeholder="Identifiant" type="text" name="name" value=""><br>
      </div>
      <div class="form-group">
        <input class="form-control" placeholder="Mot de passe" type="password" name="Prenom" value="">
      </div>
      <button type="button" name="button">Connexion</button><br>
      <a href="views/signup.php">Inscription ?</a>
      <a href="#">Mot de passe oublié ?</a>
    </div>

    
  </body>
</html>
