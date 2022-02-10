<?php

use League\Plates\Engine;
$templates = new Engine('../app/views');

echo $templates->render('create', ['h1' => 'Add book']);