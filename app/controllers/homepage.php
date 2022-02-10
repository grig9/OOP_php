<?php

use App\QueryBuilder;
use App\Connection;

$config = include __DIR__ . "/../config.php"; 

$db = new QueryBuilder(Connection::make($config['database']));

$books = $db->getAll('books');

include $_SERVER['DOCUMENT_ROOT']. "/index.view.php";