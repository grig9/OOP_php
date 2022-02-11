<?php $this->layout('layout_second', ['title' => $title, 'heading' => $heading]) ?>


<?php d($books); ?>

<a href="/create" class="btn btn-success mt-2">Add book</a>
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
    <?php foreach($books as $book): ?>
      <tr>
        <td scope="row"><?= $book['id'] ;?></td>
        <td class="text-capitalize"><a href="/show.php?id=<?= $book['id'] ;?>"><?= $book['title'] ;?></a></td>
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