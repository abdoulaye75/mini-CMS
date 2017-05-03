<?php

  include 'database/database.php';
  session_start();

  $reponse = $bdd->query('SELECT name FROM recettes');
  $user = $bdd->query("SELECT * FROM users");
  $delete_user = $user->fetch();

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
            <li> <a href="index.php"> Accueil </a> </li>
            <?php if (isset($_SESSION['name'], $_SESSION['password'])) { ?>
            <li> <?php echo '<a href="views/create.php"> Ajouter une recette </a>'; ?> </li>
            <li> <?php echo '<a href="views/signout.php"> Se déconnecter </a>'; ?> </li>
            <li> <?php echo '<a href="views/unsubscribe.php?id='.$delete_user['id'].'"> Supprimer mon compte'; ?> </a> </li>
            <?php }

            else { ?>
              <li> <?php echo "<a href='views/signup.php'> S'inscrire </a>"; ?> </li>
              <li> <?php echo "<a href='views/signin.php'> se connecter </a>"; ?> </li>

            <?php }?>     
              <li> <a href="views/recettes.php"> Fiches recette </a> </li>
              <li> <a href="views/articles.php"> Liste des articles </a> </li>
          </ul>
        </div>
      </div>
    </nav>

    <section>
      <h1 class="text-center"> Recettes de cuisine </h1>
      <p class="text-center"> Vous pouvez consulter la liste des articles, en ajouter, en modifier et en supprimer si vous êtes inscrit ou connecté. </p>
    </section>    
  </body>
</html>
