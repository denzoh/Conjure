<?php echo validation_errors(); ?>

<?php echo form_open('users/register') ?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center"><?= $title; ?></h1>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password2" class="form-control" placeholder="Confirm your password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
</div>
<?php echo form_close(); ?>