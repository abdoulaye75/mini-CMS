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
    <link rel="stylesheet" type="text/css" href="CSS/accueil.css">
  </head>
  <body>
    <?php
      // $reponse = $bdd->query('SELECT * FROM ');
      // while ($donnee = $reponse->fetch()) {
      // echo"";
      // }
     ?>
    <div class="mesonglet">
      <form action="views/articles.php" method="post">
        <h2>Connexion </h2>
        <div class="form-group">
          <input class="form-control" class="D" placeholder="Identifiant" type="text" name="name" value=""><br>
        </div>
        <div class="form-group">
          <input class="form-control" placeholder="Mot de passe" type="password" name="Prenom" value="">
        </div>
        <button  type="submit" name="button">Connexion</button><br>
        <a href="views/signup.php">Inscription ?</a>
        <a href="#">Mot de passe oublié ?</a>
      </form>
    </div>
  </body>
</html>
