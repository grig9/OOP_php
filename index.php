<?php
  // 1. соединение с БД
  // 2. формируем запрос и выполним его
  // 3. получаем ассоциативный массив
  // 4. выводим массив с помощью foreach()

  include "functions.php";

  $posts = getAllPosts(); 
  
  include "index.view.php";
  
;?>
