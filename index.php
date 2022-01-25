<?php
  include "functions.php";
  $db = include "./database/start.php";

  $books = $db->getAll('books');
 
  include "index.view.php";
  
;?>
