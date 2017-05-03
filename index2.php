<?php

require 'database/database.php';

require 'model.php';

$articles = getArticles();

$user_is_connected = isset($_SESSION['name'], $_SESSION['password']);
//$user_is_connected = true;
//$user_is_connected = false;

require 'view.php';