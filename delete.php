<?php
  $db = include "./database/start.php";
  $db->delete('books', $_GET['id']);
  header("Location: ./index.php");
;?>