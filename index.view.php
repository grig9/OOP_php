<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>My book store</title>
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
  
  <div class="container offset-md-3">
    <div class="row">
      <div class="col-md-8 my-3">
        <a href="create.php" class="btn btn-success">Add book</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Price</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($books as $book) : ?>
              <tr>
                <td scope="row"><?= $book['id'] ;?></td>
                <td class="text-capitalize"><a href="./show.php?id=<?= $book['id'] ;?>"><?= $book['title'] ;?></a></td>
                <td class="text-capitalize"><?= $book['author'] ;?></td>
                <td class="fw-bold"><?= $book['price'] ;?></td>
                <td>
                  <a href="edit.php?id=<?= $book['id'] ;?>" class="btn btn-warning">Edit</a>
                  <a href="delete.php?id=<?= $book['id'] ;?>" class="btn btn-danger" onclick="return confirm('are you sure')">Delete</a>
                </td>
              </tr>
            <?php endforeach ;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>