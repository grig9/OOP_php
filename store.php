<?php
$db = include "./database/start.php";
if(empty($_POST)) {
  echo "data is empty";

}

// var_dump($dataValue);die;

$db->create('books', $_POST);

header("Location: index.php");

// var_dump($db);die;