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
        <h2 class="mt-4"> Sing In</h2>
        <form class="mt-4" action="<?=Route::url('SinginController', 'validationUser')?>" method="POST">
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
                <div id="emailHelp" class="form-text">Do not share your password with anyone</div>
            </div>
            <button type="submit" class="btn btn-primary">SingIn</button>
        </form>
    </div>
</div>

