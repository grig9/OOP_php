<?php
$db = include __DIR__ . "/../database/start.php";
  
$books = $db->getAll('books');
   
include __DIR__ . "/../index.view.php";