<?php

use League\Plates\Engine;
$templates = new Engine('../app/views');

$db = include __DIR__ . '/../database/start.php';

$result = $db->getAll('books');

echo $templates->render('homepage', 
  [
    'title' => 'This is a book store',
    'books' => $result,
  ] 
);