<?php
  include "functions.php";
  $db = include "./database/start.php";

  $books = $db->getAll();

  include "index.view.php";
  
;?>
