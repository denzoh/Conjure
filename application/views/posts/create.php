<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>

<form class="form-horizontal">
  <fieldset>
   
    <div class="form-group">
      <label>Article title</label>
      <div>
        <input type="text" class="form-control" name="title" placeholder="Add an Article title">
      </div>
    </div>
    
    <div class="form-group">
      <label for="textArea">Article body.</label>
      <div>
        <textarea id="editor1" class="form-control" rows="10" name="body" placeholder="Add an Article body"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>

    <div class="form-group">
      <label for="category">Category</label>
      <div>
          <select name="category_id" class="form-control">
        <?php foreach ($categories as $categories): ?>
          <option value="<?php echo $categories['id'] ;?>"><?php echo $categories['category']?></option>
        <?php endforeach; ?>
      </select>
      </div>
    </div><br>

    <div class="form-group">
      <label>Upload image</label>
      <input type="file" name="userfile" size="50">
    </div>
     
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    <br>

  </fieldset>
</form>