<?php

use League\Plates\Engine;
$templates = new Engine('../app/views');

echo $templates->render('page_template', 
  [
    'heading' => 'About us',
    'title' => 'About',
    'content' => 'Some text'
  ]
);