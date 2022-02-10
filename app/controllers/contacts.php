<?php

use League\Plates\Engine;
$templates = new Engine('../app/views');

echo $templates->render('contacts', ['descripton' => 'This is a contacts page']);