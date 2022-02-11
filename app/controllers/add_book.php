<?php

use League\Plates\Engine;
$templates = new Engine('../app/views');

echo $templates->render('add_book', 
  [
    'title' => 'Add book',
  ]
);