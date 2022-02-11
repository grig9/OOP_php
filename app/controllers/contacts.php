<?php

use League\Plates\Engine;
$templates = new Engine('../app/views');

echo $templates->render('page_template', 
  [
    'heading' => 'This is a contacts page',
    'title' => 'Contacts',
    'content' => 'Some text'
  ]
);