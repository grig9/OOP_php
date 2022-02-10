<?php

// use App\QueryBuilder;
// use DataBase\Connection;

// $config = include __DIR__ . "/../../database/config.php"; 

// $db = new QueryBuilder(Connection::make($config['database']));
$db = include __DIR__ . "/../../database/start.php";

$books = $db->getAll('books');

// var_dump($db->getOneById('books', 1));

// $db->insert('books',[
//   'title' => 'world',
//   'author' => 'you',
//   'price' => '15'
// ]);

// $db->updateById('books', ['title' => 'change'], 14);

$db->deleteById('books', 14);

require __DIR__. "/../../index.view.php";