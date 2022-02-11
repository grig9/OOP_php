<?php

use League\Plates\Engine;
$templates = new Engine('../app/views');

echo $templates->render('create', ['title' => 'Add a book']);