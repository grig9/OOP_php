<?php $this->layout('layout', ['title' => 'About us']) ?>

<div class="container">
  <?php echo flash()->display() ;?>
    <div class="row">
      <div class="col-md-8 mt-2 mx-auto">
        <h1 class="col-md text-center">
          <?php echo $this->e($descripton) ;?>
        </h1>
      </div>
    </div>
</div>