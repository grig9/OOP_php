<?php
require __DIR__ . "/../vendor/autoload.php";

use App\QueryBuilder;
use DataBase\Connection;

$config = include __DIR__ . "/config.php"; 

return new QueryBuilder(Connection::make($config['database']));