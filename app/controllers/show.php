<?php

use League\Plates\Engine;
$templates = new Engine('../app/views');

$db = include __DIR__ . '/../database/start.php';

$result = $db->getOneById('books', $id);

echo $templates->render('show', 
  [
    'title' => $result['title'],
  ]
);