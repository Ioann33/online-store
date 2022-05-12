<div class="container">
    <div class="row-cols-lg-3">
        <h2 class="mt-4">Edit user</h2>
        <form class="mt-4" action="<?=Route::url('AdminUserController', 'update')?>" method="POST">
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">User name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="<?=$user['login']?>">
                <div id="emailHelp" class="form-text">Enter your name please</div>
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?=$user['email']?>">
                <div id="emailHelp" class="form-text">Enter your email</div>
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" value="<?=$user['password']?>">
                <div id="emailHelp" class="form-text">Create difficult password </div>
            </div>
            <input type="hidden" name="id" value="<?=$user['id']?>">
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
