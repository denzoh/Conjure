<h2><?= $title ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>

<div class="form-group">
	<label>Category</label>
	<input type="text" name="category" class="form-control" placeholder="Enter a Category"><br>
	<button type="submit" class="btn btn-primary">Add Category</button>
</div>