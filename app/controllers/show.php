<?php

use League\Plates\Engine;
$templates = new Engine('../app/views');

$db = include __DIR__ . '/../../database/start.php';

$book = $db->getOneById('books', $_GET['id']);

echo $templates->render('Show', ['title' => 'Show a book']);