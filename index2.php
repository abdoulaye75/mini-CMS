<?php

require 'database/database.php';

require 'model.php';

$articles = getArticles();

require 'view.php';