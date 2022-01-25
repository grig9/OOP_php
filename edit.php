<?php
  $db = include "./database/start.php";
  $book = $db->getOne("books", $_GET['id']);
;?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Create</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 mt-2 mx-auto">
        <h1 class="col-md text-center">Edit book</h1>
        <form action="./update.php?id=<?= $book['id'] ;?>" method="POST">
          <div class="mb-3">
            <label for="title" class="form-label">Title of the book</label>
            <input type="text" class="form-control" name="title" id="title" value="<?= $book['title'] ;?>">
          </div>
          <div class="mb-3">
            <label for="author" class="form-label">Author of the book</label>
            <input type="text" class="form-control" name="author" id="author" value="<?= $book['author'] ;?>">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Book price</label>
            <input type="number" class="form-control" name="price" id="price" value="<?= $book['price'] ;?>">
          </div>
          <button type="submit" class="btn btn-warning float-end">Edit book</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>