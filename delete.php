<?php
  
  $db = include __DIR__ . "/database/start.php";

  $db->deleteById('books', $_GET['id']);
  header("Location: /");
;?>