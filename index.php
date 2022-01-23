<?php
  include "functions.php";
  include "./database/QueryBuilder.php";

  $pdo = connect_to_database();
  $db = new QueryBuilder($pdo);

  $posts = $db->getAll();

  include "index.view.php";
  
;?>
