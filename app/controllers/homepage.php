<?php

use League\Plates\Engine;
$templates = new Engine('../app/views');

$db = include __DIR__ . '/../../database/start.php';

$books = $db->getAll('books');


// d($books);die;

echo $templates->render('homepage', ['title' => 'This is a book store', 'books' => $books]);