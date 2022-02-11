<?php $this->layout('layout', ['title' => $title]) ?>

<div class="container">
	<div class="row">
		<div class="col mt-3 mx-auto">
			<h1 class="col text-center">
				<?=$this->e($heading);?>
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col mt-3">
			<?=$this->section('content');?>
		</div>
	</div>
</div>