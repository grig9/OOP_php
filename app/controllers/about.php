<?php

use League\Plates\Engine;
$templates = new Engine('../app/views');

echo $templates->render('about', ['descripton' => 'This is an about page']);