<?php
$db = include "./database/start.php";
$book = $db->getOne('books', $_GET['id']);
;?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Show</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">My book store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">MainPage</a>
          </li>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <h1 class="text-capitalize text-center"><?= $book['title'] ;?></h1>
        <p class="mt-3">
          <span class="ms-4"></span>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ab aperiam sint iure perferendis, consequatur facere, porro distinctio veritatis laboriosam itaque quam, necessitatibus quos corporis incidunt aut sunt consequuntur? Dolorum.
        </p>
      </div>
    </div>
  </div>
</body>
</html>