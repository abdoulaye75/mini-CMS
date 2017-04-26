<?php

  // si les identifiants de l'utilisateur ne figurent pas dans la base de données, on empêche la connexion et on le propose de s'inscrire
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
