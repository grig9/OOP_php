<?php $this->layout('layout', ['title' => 'Create']) ?>

<div class="container">
    <div class="row">
      <div class="col-md-8 mt-2 mx-auto">
        <h1 class="col-md text-center">
          <?php echo $this->e($h1) ;?>
        </h1>
        <form action="store.php" method="POST">
          <div class="mb-3">
            <label for="title" class="form-label">Title of the book</label>
            <input type="text" class="form-control" name="title" id="title">
          </div>
          <div class="mb-3">
            <label for="author" class="form-label">Author of the book</label>
            <input type="text" class="form-control" name="author" id="author">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Book price</label>
            <input type="number" class="form-control" name="price" id="price">
          </div>
          <button type="submit" class="btn btn-success float-end">Add books</button>
        </form>
      </div>
    </div>
</div>