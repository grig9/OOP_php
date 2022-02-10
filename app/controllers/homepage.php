<?php

use League\Plates\Engine;
$templates = new Engine('../app/views');

// d($GLOBALS, $_SERVER);

echo $templates->render('homepage', ['descripton' => 'This is a book store']);