<?php if (!empty($errors)):?>
    <div>
        <ul style="color: #ff0015">
            <?php foreach($errors as $error):?>
                <li><?= $error?></li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endif;?>
<div class="container">
    <div class="row-cols-lg-3">
        <h2 class="mt-4">Create new user</h2>
        <form class="mt-4" action="<?=Route::url('AdminUserController', 'save')?>" method="POST">
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">User name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Enter your name please</div>
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
                <div id="emailHelp" class="form-text">Enter your email</div>
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
                <div id="emailHelp" class="form-text">Create difficult password </div>
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">PassConfirm</label>
                <input type="password" class="form-control" name="passConfirm">
                <div id="emailHelp" class="form-text">Confirm your password</div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
