<?php 
$db = include __DIR__ . "/../../database/start.php";

$books = $db->getAll('books');

;?>

<?php $this->layout('layout', ['title' => 'Home page']) ?>

<div class="container">
    <div class="row">
      <div class="col-md-8 mt-2 mx-auto">
          <h1 class="col-md text-center">
            <?php echo $this->e($descripton) ;?>
          </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 my-5 mx-auto">
        <a href="/create" class="btn btn-success">Add book</a>
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
                  <a href="./edit.php?id=<?= $book['id'] ;?>" class="btn btn-warning">Edit</a>
                  <a href="./delete.php?id=<?= $book['id'] ;?>" class="btn btn-danger" onclick="return confirm('are you sure')">Delete</a>
                </td>
              </tr>
            <?php endforeach ;?>
          </tbody>
        </table>
      </div>
    </div>
</div>