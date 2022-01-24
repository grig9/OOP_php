<?php
  include "functions.php";
  $db = include "./database/start.php";

  $books = $db->getAll('books');
  // $posts = $db->getAll('posts');

  // var_dump($posts);die;

  include "index.view.php";
  
;?>
