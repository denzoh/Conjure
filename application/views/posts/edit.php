<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>

<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  
<form class="form-horizontal">
  <fieldset>
   
    <div class="form-group">
      <label class="col-lg-2 control-label">Article title</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="title" value="<?php echo $post['title']; ?>" placeholder="Add an Article title">
      </div>
    </div><br><br>
    
    <div class="form-group">
      <label class="col-lg-2 control-label">Article body.</label>
      <div class="col-lg-10">
        <textarea id="editor1" class="form-control" rows="15" name="body" placeholder="Add an Article body"><?php echo $post['body']; ?></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div><br><br>

    <div class="form-group">
      <label for="category" class="col-lg-2" >Category</label>
      <div class="col-lg-10">
          <select name="category-id" class="form-control">
        <?php foreach ($categories as $categories): ?>
          <option value="<?php echo $categories['id'] ;?>"><?php echo $categories['category']?></option>
        <?php endforeach; ?>
      </select>
      </div>
    </div><br>

     <hr>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>